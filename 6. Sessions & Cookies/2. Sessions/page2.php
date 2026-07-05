<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Second Page </title>
</head>

<body>
<h1> Second Page (p. 2/3) </h1>   
<?php
session_start(); # Starts session 

print "This is page 2 <br />\n"; # Identifies page number

# Don't have to redefine access time because session continued
print "You accessed the application at: " . $_SESSION['accessTime']; # Time Accessed

print "<button><a href=\"page3.php\"> Continue to the next page... </a></button>"; # Link to proceed
print "<button><a href=\"1.CreatingAVar.php\"> Previous </a></button>"; # Link to go back

?>

</body>
</html>