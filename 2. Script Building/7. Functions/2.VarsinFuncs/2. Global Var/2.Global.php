<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Global Variables </title>
</head>

<body>
<h1> Global Variables </h1>   
<?php
# Can only be accessed within the function

# Example 1: Inside Global
function format_name_global_inside()
{
    $first_name = "John";
    $last_name = "Smith";
    global $name; # Makes var global
    $name = $first_name . ", " . $last_name;
}
format_name_global_inside();
echo "Example 1: Global Variables <b> Inside </b> a Function <br />\n";
echo "Yay! Since <b> \$name </b> inside function is global, now we can see its output, which is: <br /><br />\n\n $name. <br /><br />\n\n";

# Example 2: Outside Global
# To access variable outside from within a function, must make them global within the function.
$first_name2 = "Jane";
$last_name2 = "Doe";
function format_name_global_outside()
{
    global $first_name2; # Makes outisde var 1 global
    global $last_name2; # Makes outside var 2 global
    global $name2; # Makes inside var global to be accessed outside
    # I know, a lot of in and out and in and out lol
    $name2 = $first_name2 . ", " . $last_name2;
}
format_name_global_outside(); # Calls function
echo "Example 1: Global Variables <b> Outside </b> a Function <br />\n"; 
echo "Yay! Since <b> \$first_name </b> & <b> \$last_name </b> outside function are global, now we can see its output, which is: <br /><br />\n\n $name2.";

?>

</body>
</html>