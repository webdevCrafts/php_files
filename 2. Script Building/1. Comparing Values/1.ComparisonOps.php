<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Comparison Ops </title>
</head>

<body>
<h1> Comparision Operators </h1>   
<?php
# == : Are the two vals equal in value?
$num1 = 4;
$num2 = 4;
$TrueorFalse = $num1 == $num2;
echo "Is $num1 == $num2? ";
var_dump ($TrueorFalse); # Displays data type, which is a bool, & if it's true.
echo "<br />\n";

# === : Are two values equal in value & data type?
$firstname = "Bob";
$lastname = "bob"; # Even though they're both strings, the lowercase of bob makes the bool false. Has to be the exact same value for the comparison to be true.
$TrueorFalse2 = $firstname === $lastname;
echo "Is $firstname === $lastname? ";
var_dump ($TrueorFalse2);
echo "<br />\n";

# > : Is first value greater than second value?
$ageTimmy = 12;
$ageSuzy = 15;
$TrueorFalse3 = $ageTimmy > $ageSuzy;
echo "Is $ageTimmy > $ageSuzy? ";
var_dump($TrueorFalse3);
echo "<br />\n";

# >= : Is first value greater than or equal to second value?
$num3 = 500;
$num4 = 500;
$TrueorFalse4 = $num3 >= $num4;
echo "Is $num3 >= $num4? ";
var_dump($TrueorFalse4);
echo "<br />\n";

# < : Is first value less than second value?
$ageFredrick = 89;
$ageEdna = 97;
$TrueorFalse5 = $ageFredrick < $ageEdna;
echo "Is $ageFredrick < $ageEdna? ";
var_dump($TrueorFalse5);
echo "<br />\n";

# <= : Is first value less than or equal to second value?
$ageShelly = 62;
$ageBarney = 78;
$TrueorFalse6 = $ageBarney <= $ageShelly;
echo "Is $ageBarney <= $ageShelly? ";
var_dump($TrueorFalse6);
echo "<br />\n";

# != or <> : Are two values NOT equal to each other in value?
$cookie = "Red Velvet";
$cookie2 = "Matcha";
$TrueorFalse7 = $cookie != $cookie2;
echo "Is $cookie != $cookie2? ";
var_dump($TrueorFalse7);
echo "<br />\n";

# !== : Are two values not equal to each other in value or data type?
$glass = null;
$jar = null;
echo "Is $glass !== $jar? ";
$TrueorFalse8 = $glass !== $jar;
var_dump($TrueorFalse8);
?>

</body>
</html>