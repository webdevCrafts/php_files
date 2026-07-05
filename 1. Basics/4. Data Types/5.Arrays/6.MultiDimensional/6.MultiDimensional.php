<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Multi-Dimensional </title>
</head>

<body>
<h1> Storing Values with Multi-Dimensional Arrays </h1>   
<?php
# RULE: Keep these types of arrays managable by staying low on the dimension levels.
# RULE: The number of foreach statements should be proportionate to the number of array dimensions to fully walk through array.
# They store values with more than one key.
# Here's a two-dimensional array
# $cities is array name
# First set brackets are keynames.
# Second set bracket are values for first set brackets, but also start new set of keys.
# Values are values for second set of brackets.
$cities['AZ']['Maricopa'] = "Phoenix";
$cities['AZ']['Cochise'] = "Tombstone";
$cities['AZ']['Yuma'] = "Yuma";
$cities['OR']['Multnomah'] = "Portland";
$cities['OR']['Tillamook'] = "Tillamook";
$cities['OR']['Wallowa'] = "Joseph";

# Accesses individual value then echoes
echo ("Accesses individual value then echoes: ");
$city = $cities['AZ']['Yuma'];
echo $city;
echo ("<br /><br />\n\n");

# Or directly Echo it
echo ("Or directly Echo array value: ");
echo $cities['OR']['Wallowa'];
echo ("<br /><br />\n\n");

# Accessing MultiDimensional Array Value within a String:
echo ("<b>Accessing MultiDimensional Array Value within a String:</b> <br />\n");
echo "A city in Multnomah County, Oregon is {$cities['OR']['Multnomah']}";
echo ("<br /><br />\n\n");

# Walking Through Entire Array
# Since $cities is a two-dimensional array, it needs two foreach statements.
echo ("<b>Walking Through Entire Array:</b> <br />\n");
foreach( $cities as $state) # stores elm from cities into a variable called state. 
{ 
    foreach( $state as $county => $city ) # Put the last two values into the specified varnames.
    { 
        echo "$city, $county county <br />\n"; # Echo the varnames within the sentence.
    }
}

?>


</body>
</html>