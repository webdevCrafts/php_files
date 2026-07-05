<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Third Page </title>
</head>

<body>
<h1> Third Page (p. 3/3) </h1>   
<?php
# Since sessions can time out & variable can be lost, check if session contains vars expected before use.

session_start(); # Starts session

if(!isset($_SESSION['accessTime'])) # Tests if var is still active in session
{ 
    die(header("Location: page2.php")); # Exit & only allow navigation to page 2 until user revists page 1 to recontinue session.
}

print "This is page 3<br />\n"; # Identifies page number

print "You accessed the application at: " . $_SESSION['accessTime']; # Access Time

print "<button><a href=\"page2.php\"> Previous </a></button>"; # Button to go back

# Closes session
session_write_close(); 
?>

</body>
</html>