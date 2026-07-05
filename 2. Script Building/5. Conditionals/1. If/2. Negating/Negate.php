<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Negating </title>
</head>

<body>
<h1> Negating If Statements </h1>   
<?php
# To negate, use the ! in front of the function in a condition
# Array $list contains all strings EXCEPT those that begin with "S"
$string = "Fishsticks";
if (!preg_match("/^S[a-z]*/", $string)) # If $string DOESN'T match the pattern that begins with s.
{ 
    echo "Yay, the string doesn't begin with a capital S! <br /> 
    Here's the string's value as an array now: <br />\n";
    $list[]=$string."<br />\n"; # Output an array using the value of $string.
    echo "<pre>"; # echoes the array as console log format.
    print_r ($list); # Display the array & its values.
    echo "</pre>";
} else {
    echo "Nooo, the string matches the pattern because it begins with a capital \"S\".";
}
?>

</body>
</html>