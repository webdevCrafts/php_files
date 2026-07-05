<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Accessing Props </title>
</head>

<body>
<h1> Accessing Properties </h1>   
<?php
# Syntax: $this->varname
# The $this-> statement however, needs to be within a function within the class.
# Ex:
class CustomerOrder # ClassName
{ 
    function testme($example) { # For the sake of syntax, I added a method. Won't be covered until next page.
    // Possible $this statements to use for property
    $this->totalCost; # Accesses $totalCost
    if($this->totalCost > 1000) # Tests if $totalCost is less than 1000.
    $product[$this->size] = $price; # If so, create var named $product
    }
    
}


?>

</body>
</html>