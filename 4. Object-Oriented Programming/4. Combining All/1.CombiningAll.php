<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Combining All </title>
</head>

<body>
<h1> Combining All Components Together </h1>   
<?php
# Example 1: Script that Contains a Class for a Form Object
/* Class name: Form
 * Description: Class that creates simple HTML form containing only text input fields. 
 * Class has 3 methods.
 * 
*/
# Class Name
class Form 
{ 
    # Properties
    private $fields = array(); # Property Contains field names & labels in an array.
    private $actionValue; # Name of script to process form.
    private $submit = "Submit Form"; # Default value of submit button
    private $Nfields = 0; # Amount of fields added to the form.

/* Constructor: User passes in name of script where
 * form data is to be sent via ($actionvalue) and the
 * value to display on submit button.
*/
 function __construct($actionValue,$submit) # Method 1: Contains values of both props in below variables
 { 
    $this->actionValue = $actionValue;
    $this->submit = $submit;
 }

/* Display form function. Displays the form.
 */
 function displayForm()
 { 
    echo "\n<form action='{$this->actionValue}'method='POST'>\n";

    for($j=1;$j<=sizeof($this->fields);$j++)
    { 
        echo "<p style='clear: left; margin: 0; padding: 0; padding-top: 5px'>\n";
        echo "<label style='float: left; width: 20%'>{$this->fields[$j-1]['label']}: </label>\n";
        echo "<input style='width: 200px' type = 'text' name ='{$this->fields[$j-1]['name']}'></p>\n";
    }
    echo "<input type='submit' value='{$this->submit}' style='margin-left: 25%; margin-top: 10px'>\n";

    echo "</form>";
 }

/* Function that adds a field to the form.
 * The user needs to send name of field & label to be displayed.
 */
   function addField($name,$label)
  { 
   $this->fields[$this->Nfields]['name'] = $name;
   $this->fields[$this->Nfields]['label'] = $label;
   $this->Nfields = $this->Nfields + 1; 
  }
}

# Example 2: Using a Class in a Script
# Object Syntax: $objectname = new classname(value, value,...);
echo "Example 2: # Example 2: Using a Class in a Script <br />\n";
class car # Class Name
{
    private $color; # Property
    function paintCar($paintcolor) # Paints the car
    { 
        $this->color = $paintcolor; # New car color
    }
}
$car_Sam = new Car("green"); # Object: Creates Sam's car & its original color.
$car_Sam->paintCar("blue"); # Method: Sam's new car paint color.
echo "<pre>";
print_r ($car_Sam); # View the change.
echo "</pre>";
?>

</body>
</html>