<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> For Loops </title>
</head>

<body>
<h1> For Loops </h1>   
<?php
# Looks through the array for the "apple" string
$fruit = array ("orange", "apple", "grape"); # Creates fruit array
$testvar = "no"; # Basic variable to be tested
$k = 0; # Numerical string used as array index to cycle through array values.
while ( $testvar != "yes" ) # As long as $testvar doesn't equal "yes";
{ 
    if ( $fruit[$k] == "apple" ) # Then test if $fruit[value of $k var] equals string "apple"
    { 
        $testvar = "yes"; # If so, change the value of $testvar to yes (which stops the loop)
        echo "Yes! $fruit[$k] is an apple.\n<br />"; 
    }
    else 
    { 
        echo "$fruit[$k] is not an apple\n<br />"; # Echo if not an apple.
    }
    $k++; # If not apple, keep incrementing the value of $k by 1 until "apple" string is found.
}

?>

</body>
</html>