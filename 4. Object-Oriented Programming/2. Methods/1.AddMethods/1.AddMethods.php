<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Methods </title>
</head>

<body>
<h1> Adding Methods </h1>   
<?php
# Example 1: Basic Method: Adding 
# Adds price of item to total cost
class CustomerOrder # Class Name
{ 
    private $total = 0; # Property Name & Default Value
    function addItem($amount) # Function name & var expected to be passed
    { 
        $this->total = $this->total + $amount; # Refers to property & sets it equal to iteself plus the value of $amount.
        echo "$amount was added; current total is $this->total."; # Display the values of $amount & $total.
    }
}

# Example 2: Validating expected var of method data type
class CustomerOrder2 # Class Name
{ 
    private $total2 = 0.0; # Property Name & Default value.
    function addItem2($amount2)
    { 
        if(is_numeric($amount2)) # Tests if data type is numeric.
        { 
            # If numeric, execute these statements
            $this->total2 = $this->total2 + $amount2;
            echo "$amount2 added; Current total is $this->total2.";
        }
        else
        { 
            # If other datatype, display following message:
            echo "Value passed isn't a number";
        }
    }
}

# Example 3: Specifying Datatype of Var Expected: Array
# This is called "Type Hinting."
class AddingMachine # Class Name
{ 
    private $total3 = 0; # Property name & default value
    function addNumbers(array $numbers) # Method expects an array data type called $numbers
    { 
        //Specifies Array here
        for($i=0;i <=sizeof($numbers);$i++) # Reads through each array elm
        { 
            $this->total3 = $this->total3 + $numbers[$i]; # Sets total equal to iteself plus array elms.
        }
    }
}

# Example 3b: Specifying Datatype of Var Expected: Object
# Sties items in shopping cart as array of Item objects
class ShoppingCart # Class Name
{ 
    private $items = array(); # Array to contain each item
    private $n_items = 0; # Number of items

    function addItem( Item $item) # Expects obj called "Item" that was created from $item class
    { 
        $this->items[] = $item; # Sets array "items" equal to varname "item".
        $this->n_items = $this->n_items + 1; # Sets n_items equal to itself plus 1.
    }
}

?>

</body>
</html>