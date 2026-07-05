<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Switch </title>
</head>

<body>
<h1> Switch Statement </h1>   
<?php
# Syntax
/* 
switch ( $varname )
{ 
  case value : # The variable's value.
    block of statements;
    break; # Denotes end of statement block for a case section
  case value :
    block of statements;
    break;
  ...
  default: # defines outcome for general value of a variable;default section is optional.
     block of statements;
     break;
}
$varname = value;
*/

$custstate = "TX"; # Sets value for $cutstate
# Initiates switch statement
switch ( $custstate ) 
{ 
    case "OR": # Sales Tax for Oregon
        $SalesTaxRate = 0;
        break;
    case "CA": # Sales tax for California
        $SalesTaxRate = 1.0;
        break;
    default: # Sales tax for all other states
        $SalesTaxRate = .5;
        break;
}
$OrderTotalCost = 50; # Defines order cost
$SalesTax = $OrderTotalCost * $SalesTaxRate; # Calculates total sales tax
echo "The sales tax of $custstate is $SalesTax";
?>

</body>
</html>