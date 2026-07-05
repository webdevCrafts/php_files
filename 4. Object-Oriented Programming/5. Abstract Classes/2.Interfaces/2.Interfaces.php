<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Interfaces </title>
</head>

<body>
<h1> Interfaces </h1>   
<?php
# Things to rememeber:
# Contains only abstract methods
# Enforces pattern on class by specifying methods to be applied.
# Can't create objects from them.
# All methods MUST be public.
# SYNTAX: class classname implements interfacename

interface Moveable # Interface Name
{ 
    function moveForward($distance); # Interface Method & expected val
}

class Car # Parent Class Name
{ 
    protected $gas = 0; # Protected Property Name & Val

    function __construct($amt)
    { 
        $this->gas = $amt;
        # Displays when obj is created
        echo "<p> At creation, Car contains $this->gas gallons of gas. </p><br />\n";
    }
}

class Sedan extends Car implements Moveable # Child Class Name with Interface Method
{ 
    private $mileage = 18; # Private prop name & val

    public function moveForward($distance) # Same public method from interface
    { 
        $this->gas = $this-> gas - round(($distance/$this->mileage),2);
        # Displays when method is used
        echo "<p> After moving forward $distance miles, Sedan contains $this->gas gallons of gas. </p>";
    }
}
$my_car = new Sedan(20); # Defines gallon of $gas
$my_car->moveForward(50); # Defines $distance
?>

</body>
</html>