<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Do... While </title>
</head>

<body>
<h1> Do... While Loops </h1>   
<?php
# Syntax
/*
do 
{ 
    block of statements
} while ( condition );
*/

$iceCream = array ("vanilla", "lemon", "chocolate"); # Sets up array
$testvar = "no"; # Sets up variable to be tested
$k = 0; # Functions as array's index
do 
{ 
    if ( $iceCream[$k] == "chocolate") # Test if $iceCream equals chocolate.
    { 
        $testvar = "yes"; # End the loop by changing $testvar's value to yes.
        echo "Yes! $iceCream[$k] is chocolate! <br />\n"; # Echo chocolate is chocolate.
    }
    else
    { 
        echo "$iceCream[$k] is not chocolate. <br />\n"; # Echo value isn't chocolate.
    }
    $k++; # Keep incrementing the value of $k until value in array is "chocolate."
} while ( $testvar != "yes" ); # Condition tested at the bottom. As long as $testvar doesn't equal yes.

?>

</body>
</html>