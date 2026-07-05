<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Returning </title>
</head>

<body>
<h1> Returning Values </h1>   
<?php
# Syntax: return value; 
# Sends value back to main script.
# Returns only 1 value.

# Ex 1: Returning Singular Value
echo "Ex 1: Returning Basic Integers <br />\n";
function add_2_numbers($num1,$num2)
{ 
    $total = $num1 + $num2; # Adds the values of the parameters.
    return $total; # Returns sum of added numbers.
    # Or use a shortcut statement as follows:
    return $num1 + $num2;
}
$sum = add_2_numbers(5,6); # Calls the function & provides values.
echo "The sum of num1 + num2 is $sum. <br /><br />\n\n"; # Displays the value of $sum



# Ex 2: Returning Multiple Values with an Array (Cheats the one value returned only rule)
# Function checks array to see if it contains a value.
echo "Ex 2: Returning Multiple Values with an Array <br />\n";
function find_value($array,$value) 
{   
    for ($i=0; $i < sizeof($array); $i++) # $i equals 0. As long as $i is less than the amount of elements in the array, increment by 1.
    { 
        if ($array[$i] == $value) # If a value in $array matches the same var value given when function argument is given.
        { 
            echo "$i. $array[$i]<br /><br />\n\n"; # Echo the val of $i & the array element it's on.
            return; # Return result to main script & ends function.
        }
    }
}
$names = array("Joe","Sam","Juan"); # Creates array to pass
find_value($names,"Joe"); # Passes the array & the element "Joe"
find_value($names,"Sam"); # Passes the array & the element "Sam"
find_value($names,"Juan"); # Passes the array & the element "Juan"



# Ex:3 Returning Boolean Values
echo "Ex:3 Returning Boolean Values<br />\n";
function is_over_100($number) # Expects 1 arguement
{ 
    if($number > 100) #Checks if $number is greater than 100.
    { 
        echo "Yes, it's true $number is greater than 100! <br /><br />\n\n";
        return true; # If so, return as "true" to main script.
    }
    else
    { 
        echo "No, it's false $number isn't greater than 100. <br /><br />\n\n";
        return false; # If less than 100, then return as "false" to main script.
    }
}
$number = is_over_100(500); #Calls function, Passes value to it, & Displays $number's value.



# Ex 4: Returning Value upon Success & False upon Failure
# Returns number of array element (index[#]) where it found the passed $value.
echo "Ex 4: Returning Value upon Success & False upon Failure: <br />\n";
function find_value_exist($array,$value) # Expects two arguements
{ 
# Sets $i equals 1. As long as $i is less than the amount fo elements in $array, keep incrementing $i by one, which runs through each value in the array.
	for($i=0;$i<sizeof($array);$i++) 
	{ 
		if($array[$i] == $value) # If an array element matches the specified $value supplied in function call/
		
		{ 
			echo "<b> Success: </b> [$i] was the number returned for the array element <b> $array[$i] </b>."; # Display the array key returned.
			# Return statement is extremely important in this excercise. It took me awhile to figure out that excluding it from function was the problem.
			return $i; # Upon finding matching value, return the value of $i, which is the index, into main script, 
		} 
	}
    echo "<b> Failure </b>";
	return false; # If doesn't find matching value, return as false.
} 
$sandwiches = array("Bahn Mi","Taco","Gyro","Shawarma"); # Creates array to pass
find_value_exist($sandwiches,"Shawarma"); # Passes array & specifies value to search for.


?>

</body>
</html>