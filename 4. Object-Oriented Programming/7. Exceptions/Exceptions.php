<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Exceptions </title>
</head>

<body>
<h1> Exceptions </h1>   
<?php
# Creating an exception is called "throwing an exception"
# SYNTAX: throw ne Exception("message"); # Creates exception object & stores message in object.
# Example:
# addGas method checks whether amount of gas exceeds gas tank capacity
class Car # Class Name
{ 
    private $gas = 0; # Property name & default val

    function addGas($amount) # Method that adds gas to car
    { 
        $this->gas = $this->gas + $amount; # Refers to $gas & sets it equal to its value plus $amount's value.
        echo "<p> $amount gallons of gas were added. </p><br />\n"; # Display added gallons
        if($this->gas > 50) # Tests if amount is greater than 50 gallons
        { 
            throw new Exception("Uh Oh! Too much! The Gas is overflowing"); # Say too much gas
        }
    }
}

$my_car = new Car(); # Creates new class
try # In "try" section, add any statements that may trigger an exception
{ 
    $my_car->addGas(10);
    $my_car->addGas(45);
}
catch(Exception $e) # Catches exception obj & names it $e.
{ 
    echo $e->getMessage(); # Returns stored message
    exit(); # Stops script
}
?>

</body>
</html>