<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Copying </title>
</head>

<body>
<h1> Copying </h1>   
<?php
# __clone method
# Example
class Car
{ 
    private $gas = 0; # Gas amount prop
    private $color = "red"; # Car color prop
    function addGas($amount) # Add gas method
    { 
        $this->gas = $this->gas + $amount; # Refers to $gas & sets it equal to itself plus $amount's value.
        echo "$amount gallons were added to first car's gas tank. <br />\n"; # Display amount of gas added
    }
    function __clone() # Runs when obj 1 is copied
    { 
        $this->gas = 5; # Sets $gas equal to 5
        echo "Second car has $this->gas gallons."; # Display gallon amount
    }
}
$firstCar = new Car; # Creates new obj
$firstCar->addGas(10); # Accesses method & adds 10 gallons 
$secondCar = clone $firstCar; # Makes copy of $firstcar obj



?>

</body>
</html>