<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Right Amount </title>
</head>

<body>
<h1> Right Amount </h1>   
<?php
function add_2_numbers($num1=1,$num2=1) 
# If arguments are missing for one or both, then both parameter would take on their "=" values.
{ 
    $total = $num1 + $num2; # Calculate the sum
    echo "\$num1 + \$num2 = $total <br /><br />\n\n"; # Echo the sum
}

echo "When all is right by providing all arguments! <br />\n";
add_2_numbers(2,2); # Providing All Arguements

echo "When missing one argument, the default for the other parameter steps in. <br />\n";
add_2_numbers(2); # Missing One Arguements

echo "When missing both, both defaults for parameters step in. <br />\n";
add_2_numbers(); # Missing Both Arguments

?>

</body>
</html>