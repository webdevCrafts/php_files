<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Basic Pass </title>
</head>

<body>
<h1> Basic Pass </h1>   
<?php
# Syntax functionName(value1,value2,...);

# Computes sales tax rate for following states:
function compute_salestax ($amount,$custState) # Parameters which are variable that are expecting values to be given to them.
{ 
    # Finds the appropriate salestax rate for the chosen state
    switch ( $custState ) 
    { 
      case "OR" : # Outcome for Oregon.
        $SalesTaxRate = 0;
        break; 
      case "CA" : # Outcome for California.
        $SalesTaxRate = 1.0;
      default: # Outcome for Other States
        $SalesTaxRate = .5;
        break;
    }
    $SalesTax = $amount * $SalesTaxRate; # Calculates the sales tax.
    echo "The sales tax of $custState is $SalesTax. <br />\n"; # Echoes the state's sales tax.
}
$amount = 2000.00; # Defines parameter 1 value.
$custState = "CA"; # Defines parameter 2 value.
compute_salestax($amount,$custState); # Passes the values of the variables to function.


?>

</body>
</html>