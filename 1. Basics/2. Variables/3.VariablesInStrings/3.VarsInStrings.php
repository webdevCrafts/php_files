<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> VarsInStrings </title>
</head>

<body>
<h1> Variables Embedded In Strings </h1>   
<?php
$pet = "bird";
# Must surround varname with curly braces to call it when wanting to combine it with a string like so.
echo "The ${pet}cage has arrived.";
?>


</body>
</html>