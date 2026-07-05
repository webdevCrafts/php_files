<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Infinite Loop </title>
</head>

<body>
<h1> Avoiding Infinite Loops </h1>   
<?php
# Here's a while loop that becomes an infinite loop
# Attempts to find the "apple" string
$fruit = array ( "orange", "apple", "grape" );
$testvar = "no";
while ($testvar != "yes")
{ 
############
    $k = 0;# -- Error
############
/* Since $k is INSIDE the loop, instead of OUTSIDE the loop, the loop
will repeat forever because every time the loop runs, $k is reset to 0 which means
the array's index will always remain on [0] which, in this case, is the "orange" string
and orange is indeed NOT AN APPLE!
*/
    if ($fruit[$k] == "apple")
    { 
        $testvar = "yes";
        echo "apple\n";
    }
    else
    { 
        echo "$fruit[$k] is not an apple \n";
    }
    $k++;
}


?>

</body>
</html>