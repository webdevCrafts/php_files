<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Floats </title>
</head>

<body>
<h1> Floats </h1>   
<?php
# Arithmetic Operations
$n1 = 1.5;
$n2 = 2.8;
$sum = $n1 + $n2;
echo ("Arithmetic Operation: 1.5 + 2.8 = ");
echo $sum;
echo ("\n<br />");

# Formatting Numbers as Dollar Amounts
$price = 25;
#"sprintf" puts numbers formats into dollar amount.
$f_price = number_format($price,2); # Reformats "$price" & stores it in new format as "$f_price" with 2 decimal places.
echo ("Formatting Number as Dollar Amount: From 25 to now ");
echo "$" . $f_price; # Adds a dollar sign before the dollar amount.
?>


</body>
</html>