<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> VariableVariables  </title>
</head>

<body>
<h1> Variable Variables </h1>   
<?php
# Simple Example:
# $name_of_the_variable = "city";
# Double $$ signs denote a variable variable.
# Creates new var with name that's value of var above.
# Var will be called "$city";
# $$name_of_the_variable = "Los Angeles"; # Create a variable with the same name as the value in the variable above & give it the value of "Los Angeles."
# The var created with the varvar above is invisible.

# Complex Example
$Reno = 277660;
$Pasadena = 141000;
$cityname = "Reno";
# Displays $cityname value & creates varvar named after the cityname, which then displays the population value.
# Basically says, to then create a variable named after the value of cityname, which for this line, is "Reno."
echo "The size of $cityname is ${$cityname}.\n<br \>";
$cityname = "Pasadena"; # Changes the value to Pasadena so the statement can display Pasadena's values.
echo "The size of $cityname is ${$cityname}.";
?>


</body>
</html>