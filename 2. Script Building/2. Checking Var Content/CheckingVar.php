<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Checking Vars </title>
</head>

<body>
<h1> Checking Variable Content </h1>   
<?php
# All the below functions can be changed to being negative by preceding with an exclamation mark:
# Here's an example:
# If the below variable is NOT set.
$IsThisVariableSet = "I'm totally not set";
if (!isset($IsThisVariableSet)) {
    echo ("Yay, I'm not set! <br />\n");
} else {
    echo ("Boo, I'm set! <br />\n");
}

# isset(): checks if variable exists, if so then true even if empty.
$planet = "Neptune";
if (isset($planet)) {
    echo ("Yes this variable is set. <br />\n");
} else {
    echo ("No, variable isn't set. <br />\n");
}

# empty(): checks data in variable.
# True if value is 0, is string with no chars, or isn't set.
$myEmpty = "";
if (empty($myEmpty)) {
    echo ("My Var is Empty! <br />\n");
} else {
    echo ("No not empty. <br />\n");
}

# is_int(): checks if variable is an integer.
$myInt = 35;
if (is_int($myInt)) {
    echo ("Yes, my variable is an Integer! <br />\n");
} else {
    echo ("No, not an integer. <br />\n");
}

# is_array(): checks if variable is an array.
$Animals  = array("Air"=>"Heron", "Water"=>"Whale", "Earth"=>"Tiger");
if (is_array($Animals)) {
    echo ("Yes this is an array! <br />\n");
 } else {
    echo ("No, not an array. <br />\n");
 }

# is_float(): checks if variable is float.
$myFloat = 1.5;
if (is_float($myFloat)) {
    echo ("Yes this is a float! <br />\n");
} else {
    echo ("No, not a float. <br />\n");
}

# is_null(): checks if variable is null.
$mynull = null;
if (is_null($mynull)) {
    echo ("Yes this is a null! <br />\n");
} else {
    echo ("No, not a null. <br />\n");
}

# is_string: checks to see if variable is string
$myString = "Goodbye Cruel World!";
if (is_string($myString)) {
    echo ("Yes, this is a string! <br />\n");
} else {
    echo ("No, this isn't a string. <br />\n");
}

# is_numeric($string): checks to see if string is numeric.
$myNumericString = "55";
if (is_numeric($myNumericString)) {
    echo ("Yes, this string is numeric! <br />\n");
} else {
    echo ("No, this string isn't numeric. <br />\n");
}
?>

</body>
</html>