<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Getting values </title>
</head>

<body>
<h1> Getting Values </h1>   
<?php
# Retrieves INDIVIDUAL Value
$capitals['CA'] = "Sacramento";
$capitals['TX'] = "Austin";
$capitals['OR'] = "Salem";
# Pulls out the array value of 'CA'
$CAcapital = $capitals['CA'];
echo ("Gets Individual Value: <br />\n");
echo "The capital of California is $CAcapital";
echo ("<br /><br />\n\n");


# Retrieves MULTIPLE Values
# List function gets values from array & places vals in to variables.
$flowerInfo = array ("Rose", "red", 12.00);
# $firstvalue & $second value correspond to the first & second value in the array $flowers. 
list($firstvalue,$secondvalue) = $flowerInfo; # Put the first two values from $flowerInfo into specified variables.
echo ("Retrieves Multiple Values: <br />\n");
echo $firstvalue, "<br />\n"; # Use a comma after varname if wanting to add string.
echo $secondvalue, "<br/>\n";
# I created the statement below:
echo ("The price of a $secondvalue $firstvalue, is $flowerInfo[2] dollars.");
echo ("<br /><br />\n\n");

# Retrieves ALL Values
# "Extract" function gets all values from array with words as keys.
# Each value is copied into variable named after it.
$flowerInfo2 = array ("variety"=>"Lily", "color"=>"Magenta", "cost"=>"12.00");
extract($flowerInfo2); # Gets all info from $flowerInfo2
echo ("Retrieves ALL Values: <br />\n");
echo "Variety is $variety; Color is $color; Cost is $cost";
echo ("<br /><br />\n\n");


# Retrieves value from a nonexisting array
# Doing this causes a "notice" which is a warning.
# Doesn't stop the script
# Put an "@" before the variable used to call the nonexisting array to prevent notice display.
echo ("Tries to pull value from non-existing array. <br />\n");
@$CAcapital = $capitals['CAx'];
echo ("<br />\n\n");
?>


</body>
</html>
