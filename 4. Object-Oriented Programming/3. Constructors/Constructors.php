<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Constructors </title>
</head>

<body>
<h1> Constructors </h1>   
<?php
# Syntax: __contruct()
# Example 1: Simple Class
class MessageHandler # Class Name
{ 
    private $message; # Property Name: Stores a message.
    function __construct($message) # Method 1 & Var expected: Message stored in the constructor.
    { 
        $this->message = $message; # Refers to $message & sets it equal to $message var
    }
    function displayMessage() # Method 2: Echo stored message
    { 
        echo $this->message."\n";
    }
}

# Example 2: Changes Message to Lowercase
class MessageHandler2 # Class Name
{ 
    private $message2; # Property Name
    function __construct($message) # 1st Method: Store Message
    { 
        $this->message = $message; # Refers to $message & sets it equal to itself
    }
    function displayMessage() # 2nd Method: Display Message
    { 
        echo $this->message."\n"; # Echo message & start a new line
    }
    function lowerCaseMessage() # 3rd Method: Uses existing method to lowercase
    { 
        $this->message = strtolower($this->message); # Specifies what message to lowercase
        $this->displayMessage(); # Calls displayMessage function.
    }
}
?>

</body>
</html>