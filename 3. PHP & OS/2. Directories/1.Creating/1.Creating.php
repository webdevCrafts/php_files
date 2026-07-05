<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Creating </title>
</head>

<body>
<h1> Creating New Directory </h1>   
<?php
# mkdir function: make a directory.
# is_dir function: does dir exist?
# Ex 1: Creating New Directory
echo "Ex 1: Creating New Directory <br />\n";
$newdir = "mynewdir";
if (!is_dir($newdir)) # Tests if directory doesn't exist
{ 
    mkdir($newdir); # If so, make directory 
    # The directory is located all the way at the bottom of my VS code workspace.
    echo "A new directory named $newdir has been made. <br /><br />\n\n";
}
else
{ 
    echo "Directory already exist! <br /><br />\n\n"; # Alerts directory doesn't exist
}

# Ex 2: Creating Directory in another Directory
# Creates directory in the newly created directory above
echo "Ex 2: Creating Directory in another Directory <br />\n";
$parentDir = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/2. Directories/1.Creating/ExDir"; # The directory the new directory above will be nested in.
if (!is_dir($parentDir)) # If parent directory doesn't exist
{ 
    mkdir("$parentDir/$newdir"); # Make the parent directory
    echo "The directory has been nested in the new directory<br /><br />\n\n";
} else if(is_dir($parentDir)) { # If it does exist, then say it already exists
    echo "Nested Directory already exists.<br /><br />\n\n";
}

#Ex 3: Relative Path 
echo "Ex 3: Relative Path <br /><br />\n\n";
$mynewdir2 = "../mynewdir2";
if (!is_dir($mynewdir2)) # Creates directory in home folder in file explorer.
{ 
    mkdir ($mynewdir2);
} else {
    echo "Directory $mynewdir2, created with relative path already exists. <br /><br />\n\n";   
    }

# Ex 4: Change to different directory
$dirchange = "../anotherdir";
if (!is_dir($dirchange)){
    mkdir ($dirchange);
    chdir($dirchange);
    echo "Directory has changed to $dirchange";
} else {
    echo "Directory change is already in effect.";
}

?>

</body>
</html>