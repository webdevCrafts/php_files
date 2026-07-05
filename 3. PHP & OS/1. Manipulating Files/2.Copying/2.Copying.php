<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Copying </title>
</head>

<body>
<h1> Copying </h1>   
<?php
# Copy statement
# Syntax: copy("ExistingFilePath","NewFilePath");
# Ex 1: Copying File
# Prevents Existing File from being overridden why copying
echo "Ex 1: Prevents Existing File from being overridden why copying <br /><br />\n\n";
# If exisiting file doesn't exist
If(!file_exists("/home/tyler-a/Pictures/Fun Images/Panda-close-scaled.webp"))
{ 
    # Copies file 
    copy("/home/tyler-a/Pictures/Fun Images/Panda-close-scaled.webp");
}
else 
{ 
    # Say file already exists
    echo "File already exists! <br /><br />\n\n";
}

# Ex 2: Copying Into Different Directory
echo "Ex 2: Copying Into Different Directory <br /><br />\n\n";
$source = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/1. Manipulating Files/2.Copying/Example.txt"; # Current Filepath
$destination = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/1. Manipulating Files/2.Copying/FileCopyFolder/NewExample.txt"; # Destination Filepath
if (file_exists($source)) # If file exists
{ 
    copy($source, $destination); # Then copy file into specifed destination
    echo "File copied in different directory Successfully! <br /><br />\n\n"; # Report success
} else {
    echo "File copy failed! <br /><br />\n\n"; # If can't copy, report failure.
}

?>
?>

</body>
</html>