<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Usr Hijacking Prevention </title>
</head>

<body>
<h1> User Hijacking Prevention </h1>   
<?php
# 8/14/25 S: 10:25 p.430
# User Hijacking, a.k.a Cross Site Scripting.
# Use htmlentities() func on any val used to render html. Like echo statements with any html markup tags.

# Example 1: htmlentities() func
echo "<b> Example 1: </b> htmlentities() func: <br /><br />\n\n";
$inputString = "<b> Hello World </b>"; 
$safe_string = htmlentities($inputString);
echo $safe_string . "<br /><br />\n\n";


# Example 2: preg_match()
echo "<b> Example 2: </b> Preg_match(): <br /><br />\n\n";
$inputString2 = "<b> Farewell World! </b>";
# Tests if inputstring starts and ends with any html markup tag.
if (preg_match("/^[<a-z>]+/","$inputString2") and preg_match("/[<a-z>]+$/","$inputString2"))
{ 
    echo "$inputString is Valid input.";
} else {
    echo "$inputString is Invalid input";
}


?>

</body>
</html>