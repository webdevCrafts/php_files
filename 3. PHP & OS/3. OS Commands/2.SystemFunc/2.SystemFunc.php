<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> System Function </title>
</head>

<body>
<h1> System Function </h1>   
<?php
# Directory listing displayed & $result contains & displays last line of output from dir command.
echo "The last line of output in /etc/php/8.3 is: <br />\n";
$result = system("dir /etc/php/8.3");
echo $result;
?>

</body>
</html>