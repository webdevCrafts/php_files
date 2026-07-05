<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Download Upload </title>
</head>

<body>
<h1> Downloading & Uploading </h1>   
<?php
# DOWNLOADING 
# Ex: 1: ftp_get function
# SYNTAX: ftp_get($hostname,"downloadedfilename.ext","existingfilename.ext",filetypestatement)
$hostname = "192.168.3.174"; # Hostname
$download = ftp_get($hostname,"newfile.txt","data.txt",FTP_ASCII);
ftp_close($connect); # Closes connection to server once done
/* Breakdown: L - R
- Ip Addr, "filenameafterdownload", "existingdownloadablefilename", says file is a plain text file.
*/

# Ex: 2: SCRIPT TO DOWNLOAD FILES VIA FTP
include("ftpstuff.inc"); # Includes filename
 $dir_name = "data/"; # Specifies dir name
 $connect = ftp_ssl_connect($servername) # Connects to server
    or die ("Can't connect to ftp server.");
    $userID = "ftpuser"; # ftp user
    $pw = "ftpaccpw"; # ftp pw
 $login_result = ftp_login($connect,$userID,$pw); # Logs in
 $filesArr = ftp_nlist($connect,$dir_name); #Lists files found on server's specified dir
 foreach($filesArr as $value) # Loops through each file & places each filename into an array elm
 { 
    if(preg_match("#\.txt$#",$value)) # If filename ends with a .txt extension
    { 
        if(!file_exists($value)) # Then also test if file doesn't exist
        { 
            ftp_get($connect,$value,$dir_name.$value,FTP_ASCII); # Then download the file
        }
        else 
        { 
            echo "File $value already exists"; # Say file exists already
        }
    }
 }
 ftp_close($connect); # Close the ftp server connection
 
# UPLOADING
# Ex: 1: ftp_put function
# Same exact format as the ftp_get function
$hostname2 = "192.168.3.174"; 
ftp_put($hostname2,"newfile.txt","data.txt",FTP_ASCII);
ftp_close($connect); 

?>

</body>
</html>