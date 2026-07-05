<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Abstract Classes </title>
</head>

<body>
<h1> Asbtract Classes </h1>   
<?php
# They specify values to pass, which are called signatures.
# Rule: Abstract classes must have abstract methods.

abstract class Message # Class 1: Abstract Class
{ 
    protected $message_content; # Only child of Message class can access Property Name

    function __construct($text) # Method & Value expected
    { 
        $this->message_content = "$text"; # Refers to $message_content
    }

    abstract public function displayMessage($color); # Abstract method: can be accessed outside of class.
} ########### End of Class 1

class GiantMessage extends Message # Class 2: Creates child class from Message called "GiantMessage"
{ 
    public function displayMessage($color) # Regular method: accessed outside of class.
    { 
        echo "<h1 style = 'color: $color'> $this->message_content </h1>"; # Display Message Color
    }
} ########### End of Class 2

class BigMessage extends Message # Class 3: Creates another child class from Message called "BigMessage."
{ 
    public function displayMessage($color) # Regular method: accessed outside of class.
    { 
        echo "<h2 style = 'color: $color> $this->message_content </h2>"; # Display Message Color
    }
}
$new_color_giant = new GiantMessage("Cerulean");
$new_color_giant->displayMessage("Cerulean");
echo "<br /><br />\n\n";

$new_color_big = new BigMessage("Vermillion");
$new_color_big->displayMessage("Vermillion");
?>

</body>
</html>