
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Connect </title>
</head>

<body>
<h1> Connecting to the Server </h1>   
<?php
# ftp_connect function
# Establishes connection to my local ftp server
$connect = ftp_ssl_connect("192.168.3.174") # FTP Server's IP Address
           or die("Can't connect to server"); # Message upon failure
        
$userid = "tmanftp"; # FTP userid
$pw = "10182006#Ha"; # FTP acc pw
$login_result = ftp_login($connect, $userid, $pw) # Attempts to login to server as $userid
           or die("Can't login to server."); # Message upon failure

  
?>

</body>
</html>