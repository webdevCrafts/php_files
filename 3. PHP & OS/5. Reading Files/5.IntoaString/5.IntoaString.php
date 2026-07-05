<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Into a String </title>
</head>

<body>
<h1> Into a String </h1>   
<?php
# file_get_contents : reads entire file into a string
# SYNTAX: file_get_contents("filepath",constant);
$content = file_get_contents("2.PHP/3. PHP & OS/5. Reading Files/5.IntoaString/intoAString.txt",1); 
echo "The contents of \$content is: <br />\n $content\n ";

?>

</body>
</html>