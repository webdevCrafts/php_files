<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Objects </title>
</head>

<body>
<h1> Objects </h1>   
<?php
# Displays amount of gas added by using the buyGas public function.
class Car
{ 
 private $gas = 0;
 private function addGas($amount)
 { 
    $this->gas = $this->gas + $amount;
    echo "The Output is: $amount gallons added to gas tank.";
 }
 function buyGas($amount) 
 { 
    $this->addGas($amount); # Uses the addGas method to add gas to car.
 }
}
$new_car = new Car;
$new_car->buyGas(5);
?>

</body>
</html>