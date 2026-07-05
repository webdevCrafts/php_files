<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Writing To Files </title>
</head>

<body>
<h1> Writing to a File </h1>   
<?php
# fwrite statement: writes into file
# SYNTAX: fwrite($filepath,DataToSave);
$dir = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/6. Writing Files/2.WritingToAFile";
if (is_dir($dir)) {
    $today = date("Y-m-d"); # Contains today's date.
    $fh = fopen("2.PHP/3. PHP & OS/6. Writing Files/2.WritingToAFile/writingtofile.txt","a"); # Opens path to txt file & appends data at eof.
    fwrite($fh,"This script ran on $today\n"); # Writes to specified file today's date.
    echo "The file was opened & today's date was written in the file successfully!";
}
fclose($fh); # Closes connection

?>

</body>
</html>