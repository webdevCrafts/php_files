
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Opening & Reading Directories </title>
</head>

<body>
<h1> Opening & Reading Directories </h1>   
<?php
# Opens & reads directory
# dh means DIRECTORY HANDLE.
# Directory handles are pointers to the opened dir that can be used later to read from same dir.
echo "<b> Ex 1: Opening Basic Dir: </b> <br /><br />\n\n";
$mydir = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/2. Directories/2.Open & Read/Open&ReadMe"; # Contains dir path
$dh = opendir($mydir); # Opens dir 
echo $dh; # Displays the value of $dh 
echo "<br /><br />\n\n";



# Ex 2: Reading Filename From Dir
echo "<b> Ex 2: Reading Filename From Dir </b><br /><br />\n\n";
$filename = readdir($dh); # Contains the filename in $dh; not entire path.
echo "The filename is $filename.";
echo "<br /><br />\n\n";



# Ex 3: Reading All Filenames
echo "<b> Ex 3: Reading All Filenames: </b><br /><br />\n\n";
while($filename = readdir($dh)) # Searches through directory & displays contents
{ 
    if ($filename != "." and $filename != ".."){ # Prevents the current & parent dir from being echoed
        echo $filename."<br /><br />\n\n";
    }
    
}



# Ex 4: Script that Creates an image gallery
# Displays all images in specified directory 
echo "<b> Ex 4: Script that Creates an image gallery: </b><br /><br />\n\n";
$dir = "/home/tyler-a/anotherdir/"; # defines dir path (I reused this path)

////////////////////////////////////////////////// I added these conditionals
if (!is_dir($dir)) { # If $dir doesn't exist
    mkdir($dir); # Make it
    echo "$dir has been created."; # Say it was created
} else { # If exists, then say it exists
    echo "<b style='font-size: x-large;'>
    $dir already exists; will proceed with the image gallery...
          </b><br /><br />\n\n";
}
///////////////////////////////////////////////////

$dh2 = opendir($dir); # Opens dir (provides access to path for other variables). 

# Reads the contents of the open filepath & contains them in $filename.
while($filename2 = readdir($dh2)) # Reads each filename in the dir
{ 
    $filepath = $dir.$filename2; # Defines complete filepath for each file.
    if ($filename2 != "." and $filename2 != ".."){ # Since "." represents current dir & ".." represents parent dir, I want them filtered out.
#### echo "$filepath"."<br /><br />\n\n"; # Displays filepath names ####
## UNCOMMENT the above line to see each filepath name. ##
    }
    
# Tests if $filepaths are files & if they're specifically .webp extension files. 
    if(is_file($filepath) and preg_match("/.webp$/",$filename2)) 
    { 
        
        $gallery[0] = $filepath; # If they are, make an an array containing all filepaths. 
         
        sort($gallery); # Sorts filepaths in alphabetical order 
        
        # Start loop to display images in webpage
        foreach($gallery as $image) # Put each array key into a variable called $image
        { 
            # I tried numbering each image respectively 1 - 4 with the loop below, but I haven't figured it out yet.
            # UPDATE BELOW LOOP WHENEVER I FIGURE OUT HOW.
            for($i=0; $i=sizeof($gallery); $i++) # Keeps looping until $i is equal to the size of $gallery.
            {
                echo "<hr />"; # Starts new line
                echo "Image # $i: <img src='$image' alt='Alt text: Cat Photo $i'/><br />"; # Display each image & its respective number
                echo "The image path for this image is <b> $image. </b> <br />\n";
                break; # Makes sure images are displayed only once.
            }
           break; # Makes sure images are displayed only once. 
        }  
    }
}


?>


</body>
</html>