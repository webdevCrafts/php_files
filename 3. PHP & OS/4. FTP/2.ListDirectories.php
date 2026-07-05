<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Directory Listing </title>
</head>

<body>
<h1> Directory Listing </h1>   
<?php
# Ex: 1: Directory Listing if Dir name is known
$connect = ftp_ssl_connect("192.168.3.174") # FTP Server IP
           or die("Can't connect to server"); # Fail message

$userid = "acchere"; # Acc user
$pw = "pwHere"; # Acc pw
$login_result = ftp_login($connect, $userid, $pw) # Attempts to login
           or die("Can't login to server."); # Fail message
$filesArr = ftp_nlist($connect,"data"); # Connects to server & finds specified directory "data" & returns lists of files in the dir
foreach($filesArr as $value) # Takes found values from $filesArr & outputs them as individual array elms
{ 
    echo "$value\n"; # Display each file found in the dir
}

# Ex: 2:  Dir listing if Dir name is forgotten
$dir_name = ftp_pwd($connect); # Returns current dir name
$filesArr = ftp_nlist($connect,$dir_name); # Returns lists of files in the dir

?>

</body>
</html>