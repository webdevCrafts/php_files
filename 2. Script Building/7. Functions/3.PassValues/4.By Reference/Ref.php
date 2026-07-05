<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> By Reference </title>
</head>

<body>
<h1> Passing Values By Reference </h1>   
<?php
# Pass by Reference denoted by the preceding ampersand "&"
function add_1(&$num1) # Points to location of var passed.
{ 
    $num1 = $num1 + 1; # Adds 1 to the value of $num1.
}
$num1 = 3; # Sets value of $num1.
add_1 ($num1); # Calls function & supplies argument.
# Echos value of $num1 after the function.
echo "After the function, the value of \$num1 is now $num1."; 
?>

</body>
</html>