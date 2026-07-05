<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Resources </title>
</head>

<body>
<h1> Resources </h1>   
<?php
# The storing of a reference to functions & resources external to PHP.
# Ex: Database Calls
# Connecting to MySQL DB
$hostname = "localhost";
$user = "tman";
$password = "";
$dbname = "DeleteMeNow";

$cxn = mysqli_connect($hostname,$user,$password,$dbname); # Connects to Server & specified DB.
if ($cxn->connect_error) { # If there's a connection error
    die("Connection failed: " . $cxn->connect_error); # Display a couldn't connect message.
} else {
    echo "Connected successfully to $dbname DB."; # Display connected message.
}
?>

</body>
</html>