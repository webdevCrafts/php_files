<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Display Variable Values  </title>
</head>

<body>
<h1> Display Variable Values </h1>   
<?php
# Echo Statement
echo "Echo: I love soup!\n<br \>";

# Print Statement
print "Print: You love soup too!\n<br \>";

# Print_r Statement
$colors = ["Red","Orange","Yellow","Green","Blue","Indigo","Violet"];
$statementType = "print_r: ";
echo "Print_r: ";
print_r ($colors);
echo ("</br \>"); # Starts new line on webpage

# Var_dump Statement
$boolean = 2 == 2;
echo "Var_dump: ";
var_dump ($boolean);
?>


</body>
</html>