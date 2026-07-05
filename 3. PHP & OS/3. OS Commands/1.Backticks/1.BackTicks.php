<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Backticks </title>
</head>

<body>
<h1> Backticks </h1>   
<?php
# They execute system commands.

$result = `dir /home/tyler-a/Pictures/FunImages`;  
echo "Here are the contents of the directory: <br />\n";
echo "<b> $result </b>"; # Lists files within the directory. (In bold text)

?>

</body>
</html>