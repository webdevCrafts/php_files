<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Renaming </title>
</head>

<body>
<h1> Renaming </h1>   
<?php
$OldFilePathName = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/1. Manipulating Files/3.Renaming/RenameMe.txt";
$NewFilePathName = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/1. Manipulating Files/3.Renaming/NewFileName.txt";
if (file_exists($OldFilePathName)) {
  rename($OldFilePathName, $NewFilePathName);  
  echo "The file was renamed successfully!";
}


?>

</body>
</html>