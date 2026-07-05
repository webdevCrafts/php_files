<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Integers </title>
</head>

<body>
<h1> Peforming Arithmetic Operations </h1>   
<?php
# With just #s
$equation1 = 1 + 2;
echo ("Equation #1: 1 + 2 = ");
echo $equation1;
echo ("\n<br \>");

# With variables that contain #s
$n1 = 3;
$n2 = 4;
$equation2 = $n1 + $n2;
echo ("Equation #2: \$n1 + \$n2 = ");
echo $equation2;
echo ("\n<br \>");
# Perform several operations simultaneously
# PHP performs Order of Operations like this: multiplication, division, addition, then subtraction.
# If other considerations are equal, PHP goes from left to right.
$equation3 = 1 + 2 * 4 + 1;
echo ("Equation #3: 1 + 2 * 4 + 1 = ");
echo $equation3;
?>


</body>
</html>
