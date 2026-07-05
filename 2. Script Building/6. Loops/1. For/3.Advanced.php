<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Advanced </title>
</head>

<body>
<h1> Advanced For Loops </h1>   
<?php
/* Syntax
for (beginning statements; # Execute before loop runs
     conditional statements; # Tested for each iteration
     ending statements) # Execute once at loop's end.
{ 
     block of statements;     
}
*/

$t = 0; # Sets $t's value.
for ($i = 0, $j = 1; $t < 4; $i++,$j++) # Sets values for $i & $j. As long as $t is less than 4. Increment $i & $j by 1.
{ 
    $t = $i + $j; # Resets $t's value to equal sum of adding $i's value with $j's value.
    echo "$t <br />\n"; # Echo the sum
}
?>

</body>
</html>