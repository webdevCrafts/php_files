<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Removing Values </title>
</head>

<body>
<h1> Removing Array Values </h1>   
<?php
# Complete Array
$cities[0] = "Phoenix";
$cities[1] = "Tucson";
$cities[2] = "Flagstaff";
$cities[3] = "Tempe";
$cities[4] = "Prescott";
echo ("This is the original array: ");
print ("<pre>");
print_r($cities);
print ("</pre>");
echo ("<br />\n");

# Changes array value to empty, but element still exists.
$cities[3] = ""; 
echo ("Here's the array with value 3 now empty: <br />\n");
echo ("Made the array value blank.");
print("<pre>");
print_r($cities);
print("</pre>");
echo ("<br />\n");

# Completely Removes Array Value
unset($cities[3]);
echo ("Here's the array with value 3 completely removed: <br />\n");
echo ("Used the <b>unset</b> statement.");
print("<pre>");
print_r($cities);
print("</pre>");
echo ("<br />\n");
?>


</body>
</html>
