<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Obj & Class Info </title>
</head>

<body>
<h1> Getting Obj & Class Info </h1>   
<?php
# Ex: 1: Checks if class exists
echo "Ex: 1: Checks if class exists: <br />\n";
class birds{}
if(class_exists("birds"))
{ 
    echo "Yes the class exists.<br /><br />\n\n";
}

# Ex: 2: Tests if property exists in specific class
echo "Ex: 2: Tests if property exists in specific class";
class shapes {
    private $sides;
}
if (property_exists("shapes","sides"))
{ 
    echo "Yes the property in the specified class, exists. <br /><br />\n\n";
}

# Ex: 3: Lists props & thier defaults
# Lists properties
echo "Ex: 3: Lists props & thier defaults ";
class winter
{ 
    public $temperature = "cold";
    public $clothing = "warm";
    public $weather = "snowy";
}
$show_props = get_class_vars("winter");
echo "<pre>";
var_dump($show_props);
echo "</pre><br /><br />\n\n";

# Ex: 4: Lists methods in a class
echo "Ex: 4: Lists methods in a class";
class summer
{ 
    public $temperature = "hot";

    function wearSunglasses()
    {}

    function goToTheBeach()
    {}
}
$show_methods = get_class_methods("summer");
echo "<pre>";
var_dump($show_methods);
echo "</pre><br /><br />\n\n";

# Example 5: Tests if object, parents, or interface were created by specified class
echo "Ex 5: Tests if object, parents, or interface were created by specified class <br /><br />\n\n";
class hat {}
$blue_hat = new hat;
if($blue_hat instanceof hat)
{ 
    echo "Yes, \$blue_hat is an instance of the class \"hat.<br /><br />\n\n";
} 

# Example 6: List current prop values of object
echo "Ex 6: List current prop values of object <br /><br />\n\n";
class fish 
{
    public $habitat = "ocean";
    public $specialfeature = "fins";
    public $texture = "spiky";
}
$pufferfish = new fish;
$show_prop_values = get_object_vars($pufferfish);
echo "<pre>";
print_r($show_prop_values);
echo "</pre>";
?>

</body>
</html>