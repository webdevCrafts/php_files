<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Right Type </title>
</head>

<body>
<h1> Right Type </h1>   
<?php
function add_numbers($numbers) 
{ 
    if(is_array($numbers)) # Test if $numbers is an array
    { 
        # If an array, then loop through the for loop.
        for ($i=0; $i < sizeof($numbers); $i++) /* Set $i equal to 1 & as long as $i is 
        less than the amount in $numbers, increment the value of $i by 1.
        # The value of "$i" acts as the array's index, which makes echoing the array possible instead of using print_r or var_dump, which include extraneous details.
*/
        { 
            # @ Hides the warning if one appears. 
            @$sum = $sum + $numbers[$i]; # Adds array's values together. 
        }
        echo "The sum of \$numbers is $sum. <br />\n"; 
    }
    else
    { 
        echo "Value passed isn't an array. <br />\n"; # If arguement isn't an array echo that it isn't an array.
        return; # Ends execution of functions since arguement isn't an array.
    }
}
$arrayofnumbers = array(100,200); # Creates an array
# When passing correct data type:
echo "<b> When passing correct data type: </b><br />\n";
add_numbers($arrayofnumbers); # Passes array to the function
echo "Passed: add_numbers(\$arrayofnumbers), which is an array. <br /><br />\n\n";

# When passing an incorrect data type:
echo "<b> When passing incorrect data type: </b><br />\n";
# Attempts to pass integer to function that's expecting an array! Not Compatible!!
add_numbers(100); 
?>

</body>
</html>