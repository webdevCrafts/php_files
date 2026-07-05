<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Getting File Info </title>
</head>

<body>
<h1> Getting File Info </h1>   
<?php
# Ex 1: Checking If file Exists
# file_exists statement
# Syntax: file_exists(file/path/here)
echo "Ex 1: Checking If file Exists <br />\n";
$MyRealFile = ("/home/tyler-a/WebDev/2.PHP/2. Script Building"); # Defines path
  if (!file_exists($MyRealFile)) { # Tests if file doesn't exist
    echo "Sorry, this file doesn't exist or no longer exists! <br /><br />\n\n";
} else {
    echo "Hooray! This file exists! <br /><br />\n\n";
}

# Ex 2: Returning Useful info about path/filename
# pathinfo() function
# Converts info about file into an array with elements.
echo "Ex 2: Returning Useful info about path/filename";
$pinfo = pathinfo("/home/tyler-a/Pictures/Fun Images/Panda-close-scaled.webp"); # Defines path
echo "<pre>"; # Makes array appear exactly like in console log.
print_r($pinfo)."<br /><br />\n\n"; # Views pathinfo array.
echo "</pre>";

?>

</body>
</html>