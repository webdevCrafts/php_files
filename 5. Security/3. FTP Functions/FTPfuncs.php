<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> FTP Functions </title>
</head>

<body>
<h1> FTP Functions </h1>   
<?php 
# FTP Server Connection Validation
// Sets up basic connection to FTP Server
$ftp_server = "192.168.3.174";
$connection_id = ftp_ssl_connect("$ftp_server");

// Login with username & password
$ftp_username = "";
$ftp_pw = "";
$login_result = ftp_login($connection_id, $ftp_username, $ftp_pw);

// Check Connection
# "||" has the same meaning as the "or" keyword.
if ((!$connection_id) || (!$login_result)) # Tests if connection id is invalid or if login result was unsuccessful.
{ 
    echo "FTP connection has failed!"; # Failed message
    echo "Attempted to connect to $ftp_server for user $ftp_username"; # Attempted Message
    exit; # Output a message & terminate script
} else {
    echo "Connected to $ftp_server, for user $ftp_username"; # Successful connection message
}

// Upload the file
$source_file = "";
$destination_file = "";
$upload = ftp_put($connection_id, $destination_file, $source_file, FTP_Binary); # Contains statement to upload a specified file

// Check Upload Status
if (!$upload) # Tests if upload failed
{ 
    echo "FTP upload has failed!"; # Upload Failure Message
} else {
    echo "Uploaded $source_file to $ftp_server as $destination_file"; # Successful upload Message
}

// Closes FTP Stream
$closure = ftp_close($connection_id);
?>

</body>
</html>