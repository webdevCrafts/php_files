<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Sorting Arrays </title>
</head>

<body>
<h1> Sorting </h1>   
<?php
# With #s as Keys
# Use "sort" function.
# Sorts by values & assigns new keys that are appropriate numbers.
# In alphabetical order.
$cities[0] = "Sandy";
$cities[1] = "Draper";
$cities[2] = "CottonWood";
$cities[3] = "Murray";
$cities[4] = "Holladay";
sort($cities);
echo ("Sorted Array with numbers as keys: <br />\n");
echo ("<pre>");
print_r($cities);
echo ("</pre>");

# With Words as Keys
# Use "asort" function.
# In alphabetical order.
$capitals['ME'] = "Augusta";
$capitals['SD'] = "Pierre";
$capitals['WI'] = "Madison";
asort($capitals);
echo ("Sorted Array with letters as keys: <br />\n");
echo ("<pre>");
print_r($capitals);
echo ("</pre>");

?>

</body>
</html>
