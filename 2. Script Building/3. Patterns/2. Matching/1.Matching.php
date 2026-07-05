<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Matching </title>
</head>

<body>
<h1> Pattern Matching with Preg_match() Function </h1>   
<?php
# Preg_match Function
# Syntax: preg_match("pattern",variable containing string);
# EX: 
#### preg_match("/^[A-Za-z' -]+$/","$name"); ####

## Or if pattern contains frontslashes:
#### preg_match("#^[A-Za-z' -/]+$#","$name");  ####

# Example In Action:
$name = "Bobby PitterPatter";
# If $name matches the pattern echo whether or not it's a match.
if (preg_match("/^[A-Za-z' -]+$/","$name") or preg_match("#^[A-Za-z' -/]+$#","$name")){
    echo "Yes! $name is a match!"; 
} else {
    echo "No! $name isn't a match!";
}

# THE BREAKDOWN:
/*
- // or ##: delimiters
- ^$: Beginning & end of string.
- []: Encloses all literal characters allowed in string.
- A-za-z: Any letters upper or lower case from A to Z.
- ': A literal apostrophe.
- : A literal space.
- -: A literal hyphen.
- +: can contain any number of characters inside the [], but it has to be at least one.

*/

?>

</body>
</html>