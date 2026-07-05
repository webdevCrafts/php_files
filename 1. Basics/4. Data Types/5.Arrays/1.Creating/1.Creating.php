<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Creating & Viewing </title>
</head>

<body>
<h1> Creating & Viewing An Array </h1>   
<?php
# Creating 
# Array with numbers as keys
$cities[1] = "Phoenix";
$cities[2] = "Tucson";
$cities[3] = "Flagstaff";

# Viewing
# Arrays can be viewed as a list of "key/value" pairs.
# Each pair is an element.
# Each key in brackets represents an individual array value.
echo ("This is the 1st value is the \$cities array: ");
print_r ($cities[1]);
echo ("<br /><br />\n");

# Array with letters as keys 
$capitals['CA'] = "Sacramento";
$capitals['TX'] = "Austin";
$capitals['OR'] = "Salem";
echo ("Array with letters as keys: ");
echo ("The capital of Oregon is: ");
print_r ($capitals['OR']);
echo ("<br /><br />\n");

# Array with letters as keys formatted differently
$capitals2 = array("CA" => "Sacramento", "TX" => "Austin", "OR" => "Salem");
echo ("Array with letters as keys formatted differently: <br />\n");
echo "<pre>"; # Displays array in same format as console log. Makes array easier to read.
print_r($capitals2);
echo "</pre";
echo ("<br /><br />\n");

# Array with shortcuts
# The default invisible keys in the [] start from 0 - how many array values there are.
$states[] = "New York";
$states[] = "Utah";
$states[] = "Idaho";
echo ("Array with shortcut keys: <br />\n");
echo ("Here is a state: ");
print_r($states[1]);

?>


</body>
</html>
