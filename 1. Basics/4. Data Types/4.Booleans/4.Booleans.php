
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Booleans </title>
</head>

<body>
<h1> Booleans </h1>   
<?php
# Example 1: Character Strings
# Tests to see if var sky equals blue.
echo ("Example 1: Character Strings<br />\n");
$skycolor = "blue"; # Sets variable equal to blue.
echo ("Is the sky $skycolor?<br />\n"); # Display that the the sky is whatever color is in the var.
$Question = $skycolor == "blue"; # Says that $skycolor is equal to blue regardless if it's actually incorrect.

if ($skycolor !== "blue") { # Tests if $skycolor indeed equals blue.
    echo ("No.<br />\n"); # If not blue, echo No.
    echo ("Var_dump: <br />\n"); # Identify that the following result is from var_dump statement.
    var_dump($Question); # Give me the data type & its condition. (Which in this case, the bool is false since the sky isn't blue).
} else {
    echo ("Yes the sky is $skycolor.<br />\n"); # Yes the sky is blue.
    echo ("Var_dump: <br />\n");
    var_dump($Question); 
    echo ("<br /><br />\n");
}


# Example 2: Greater Than or Less Than
echo ("Example 2: Greater Than or Less Than<br />\n");
$comparison = 500 - 200 < 700;
echo ("Is 500 - 200 < 700 true?<br />\n");
var_dump($comparison);
?>

</body>
</html>