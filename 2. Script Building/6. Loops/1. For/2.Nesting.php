<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Nesting Loops </title>
</head>

<body>
<h1> Nesting For Loops </h1>   
<?php
# Prints muiltiplication tables from 1 to 9
echo "Prints muiltiplication tables from 1 to 9: <br />\n";
for ($i=1;$i <= 9; $i++) # Sets $i = 1. As long as $ is less than or equal to 9. Increment by 1.
{
    echo "\nMultiply by $i <br />\n"; # Echo what value of $i is multiplied by.
    for ($j=1; $j <= 9; $j++) # Creates variable for $ i to multiply by.
    { 
        $result = $i * $j; # Miltiply the variables' values by each other.
        echo "$i x $j = $result<br /><br />\n\n"; # Echo the result
    }
}
# Explanation: For iteration of the parent for loop with $i, the nested loop with $j runs 9 times.

?>

</body>
</html>