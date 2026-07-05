<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Read Mode </title>
</head>

<body>
<h1> Read Mode </h1>   
<?php
# fopen opens file or url
# Parameter 1 is the filename, & parameter 2 is the mode.
# SYNTAX: fopen("filepath","mode");
$fh = fopen("2.PHP/3. PHP & OS/5. Reading Files/file1.txt","r") # Tries to find filename is current dir & filename in read mode only
    or die("Can't open file"); # fail message

?>

</body>
</html>