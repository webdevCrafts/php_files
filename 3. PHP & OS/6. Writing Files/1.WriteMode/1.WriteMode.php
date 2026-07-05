<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Write Mode </title>
</head>

<body>
<h1> Write Mode </h1>   
<?php
If(is_dir("2.PHP/3. PHP & OS/6. Writing Files")) # Tests if the dir in which the file specified, exists
{
# If the dir exists, then open the file & turn on write mode for it
    $fh = fopen("2.PHP/3. PHP & OS/6. Writing Files/1.WriteMode/writemode.txt","w");
    echo "If you see this message <br />\n Write mode for the specified file, has been enabled.";
}
    


?>

</body>
</html>