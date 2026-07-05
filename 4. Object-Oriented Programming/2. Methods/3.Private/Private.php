<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Private Method </title>
</head>

<body>
<h1> Private Method </h1>   
<?php
# 1st Method can only be executed within the class.
echo "<h2> Accessing a private Method through public method: </h2> <br />\n";
class Car # Class Name
{ 
    private $gas = 0; # Property Name & Default value
    private function addGas($amount) # 1st Method & Var expected: Outcome after someone buys gas.
    { 
        $this->gas = $this->gas + $amount; # Refers to $gas & sets it equal to itself plus $amount's value
        echo "$amount gallons were added to gas tank."; # Display amount of gas added
    }
    function buygas($amount) # 2nd Method & Var expected: Makes sure person buys gas before filling!
    { 
        $this->addGas($amount); # Declares that the only way to use addGas method is through buygas method first, which is private.
    }
}
# Even though "addGas" can't be accessed outside script, "buyGas" can
$new_car = new Car;
$new_car->buyGas(10); 

?>

</body>
</html>