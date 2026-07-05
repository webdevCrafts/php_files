<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Destroying </title>
</head>

<body>
<h1> Destroying Objects </h1>   
<?php
# Syntax: unset($objName);

# Ex: 1: Destroying with Unset
echo "Ex: 1: Destroying with Unset <br /><br />\n\n";
class Car {}
$myCar = new Car;
unset($myCar);
echo "\$mycar obj was destroyed.<br /><br />\n\n";

# Ex: 2: __destruct
# Special method that runs after object is destroyed
echo "Ex: 2: __destruct <br/><br/>\n\n";
class Bridge # Class name
{ 
    function __destruct() # Method that executes statement block upon destruction
    { 
        echo "The bridge is destroyed"; # Dsplay destroyed message
    }
}
$bigBridge = new Bridge; # Creates new obj from Bridge class
unset($bigBridge); # Destroys created obj
?>

</body>
</html>