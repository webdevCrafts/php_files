<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Creating A Var </title>
</head>

<body>
<h1> Creating a Session Variable (p. 1/3) </h1>   
<?php
# session_start(): starts new session if need be & continues existing session.

// Starts session
session_start();

# Gives elm in session array the value of today's date.
$_SESSION['accessTime'] = date("M/d/Y g:i:sa"); 

# Identify Page number
print "This is page 1 <br />\n"; 

# Time Page was accessed
print "You accessed the application at: " . $_SESSION['accessTime']. "<br />\n"; 

# Link to proceed to next page
print "<button><a href=\"page2.php\"> Continue to the next page... </a></button><br />\n";


?>

</body>
</html>