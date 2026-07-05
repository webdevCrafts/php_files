<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Comparing </title>
</head>

<body>
<h1> Comparing </h1>   
<?php
# ==: Identical only if refer to same instance of same class.
# ===: Equal if created from same clss & have same props & vals.
# Example

# Ex: 1: Equal in value, but not Identical (==)
echo "Ex: 1: Equal in value, but not Identical <br/><br />\n\n";
class Car {} # Class Name
$my_car = new Car(); # Obj 1
$my_car2 = new Car(); # Obj 2
If ($my_car == $my_car2) # Tests if they're equal in value
{ 
    echo "They're equal in value, but not identical. <br /><br />\n\n"; # Equal message
}

# Ex: 2: Equal & Identical (===)
echo "Ex: 2: Equal & Identical (===) <br/><br />\n\n";
class Car2 {} # Class Name
$my_car3 = new Car2(); # Obj 1
$my_car4 = $my_car3; # Obj 2
If ($my_car3 === $my_car4) # Tests if they're equal & identical
{ 
    echo "They're equal & identical."; # Equal message
}

?>

</body>
</html>