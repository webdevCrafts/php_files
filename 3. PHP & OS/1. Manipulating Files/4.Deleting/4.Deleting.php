<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Deleting </title>
</head>

<body>
<h1> Deleting </h1>   
<?php
$filepath = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/1. Manipulating Files/4.Deleting/badfile.txt"; # File to be deleted
///////////////////////////// Recreates file if deleted
if (!file_exists($filepath)){ 
fopen("$filepath","w"); // Create the file if it doesn't exist
echo "File was recreated! <br />\n";
}
//////////////////////////////
if (file_exists($filepath)){ # Tests if it exists
unlink ($filepath); // Deletes file
echo "File was deleted. <br />\n";   
//////////////////////////////// Recreates file again once deleted
if (!file_exists($filepath)){
fopen("$filepath","w"); 
echo "File was recreated! <br />\n";
}
}


?>

</body>
</html>