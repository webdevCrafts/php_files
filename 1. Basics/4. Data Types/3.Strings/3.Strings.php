<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Strings </title>
</head>

<body>
<h1> Strings </h1>   
<?php
# Assigning Strings to Variables
$string1 = "Hello World!";
echo ("Assigning Strings to Variables: ");
echo $string1;
echo ("<br /><br />\n");

# Strings with apostrophes
# Have to use precede apostrophe or double quote with backslash \ to escape.
echo ("Strings with apostrophes: ");
$string2 = 'Happy St.Patrick\'s day!';
echo $string2;
echo ("<br /><br />\n");

# Handling Variables
$month = 12;
$result1 = "$month";
$result2 = '$month';
echo ("Handling Variables: <br />\n");
echo $result1;
echo "<br /><br />\n";
echo $result2;
echo ("<br /><br />\n");

# Inserting a Tab
$string3 = "Here is a \ttab!<br />\n";
echo ("Inserting a Tab: ");
echo $string3;
echo ("<br />\n");

# Concatenating Strings
$string4 = 'Graham';
$string5 = 'Cracker';
$stringboth = $string4 . $string5;
echo ("Concatenating Strings: Graham + Cracker = ");
echo $stringboth;
echo ("<br /><br />\n");

# Storing Very Long Strings
# Use "heredoc" statement
# Evaluates variables & special charcaters in same manner as double-quoted string.
# Everything between the opening & closing "ENDOFTEXT" tags gets read.
$distance = 10;
$herevariable = <<<ENDOFTEXT
The distance between
Los Angeles and Pasadena
Is $distance miles.
ENDOFTEXT;
echo ("Storing Very Long Strings: \n");
echo $herevariable;
?>


</body>
</html>