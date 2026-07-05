<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Exec Function </title>
</head>

<body>
<h1> Executive Function </h1>   
<?php
# Executes system command without displaying output.
# Output can be stored an an array.
# Last line of output returned.

# Ex:1 Execute without Output
echo "Ex:1 Execute without Output <br />\n";
$result = exec("dir /home/tyler-a/tyler-d");
echo "$result <br /><br />\n\n"; # Outputs last line of output of dir command.

# Ex:2 Storing Output in an Array
echo "Ex:2 Storing Output in an Array <br />\n";
$result2 = exec("dir /home/tyler-a/Pictures",$dirout); # Stores output in array called $dirout
foreach($dirout as $line){ # Places each array elm into a respective variable called $line.
echo "$line\n";
}

?>

</body>
</html>