<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Local Variables </title>
</head>

<body>
<h1> Local Variables </h1>   
<?php
# Can only be accessed within the function
function format_name_local()
{
    $first_name = "John";
    $last_name = "Smith";
    $name = "$first_name, $last_name";
}
format_name_local();
echo "Since variable \$name is local, its data cannot be echoed outside the script :(.";

?>

</body>
</html>