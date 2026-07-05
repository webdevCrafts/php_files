<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Public Method </title>
</head>

<body>
<h1> Public Method </h1>   
<?php
# Method can be executed outside the class.
echo "<h2> Accessing a public Method: </h2> <br />\n";
class Car # Class Name
{ 
    public $gas = 0; # Property name & default value
    function addGas($amount) # Function name & var expected
    { 
        $this->gas = $this->gas + $amount; # Refers to $gas & sets it equal to its value plus $amount's value.
        echo "$amount gallons were added to gas tank."; # Display how many gallons were added.
    }
}
# Accesses method outside the class
$new_car = new Car; # Creates new object from "Car" obeject.
$new_car->addGas(5); # Object accesses method from Car class.

?>

</body>
</html>