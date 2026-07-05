<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Include Statements </title>
</head>

<body>
<h1> Include Statements </h1>   
<?php
# Ex 1: Basic Include File
# Includes file with form markup
echo "<p style='position: relative; left: 10em; font-size: x-large;'>
      Ex 1: Basic Include File <br />\n
      The markup below was imported from an include file!
      </p>";

include("1a.Form.html"); # Includes file's form markup


#Ex 2: Variables in Include 
# Includes appropriate file depeding on what day of the week it is.
echo "<p style = 'font-size: xx-large; text-align: center; position: relative; bottom: 8em;'> 
      Example 2: Variables in Include </p>";
$today = date("D"); # Outputs the name of the current day
# Allows for files to be accessed outside of current directory.
ini_set("include_path","2.PHP/2. Script Building/8. Organizing/DaysofTheWeek Inc Files"); # Sets include directory path for this script only. 
include("$today".".inc"); # Looks for file that begins with abbreviation for day .inc.
# Ex: Looks for Mon.inc.

?>

</body>
</html>