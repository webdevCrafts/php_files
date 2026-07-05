<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Into an Array </title>
</head>

<body>
<h1> Reading Contents into an Array </h1>   
<?php
# Example 1: Using fgets function
echo "Example 1: Using fgets function <br />\n";
$fh = fopen("2.PHP/3. PHP & OS/5. Reading Files/4.IntoanArray/intoAnArray.txt","r"); # Opens specified file & reads it
while(!feof($fh)) # As long as the eof not reached in file in $fh
{ 
    $content[] = fgets($fh); # Make array called "connect" containing the contents of $fh file
}
echo "<pre>";
print_r($content); # Displays each file array elm
echo "</pre><br /><br /><br />\n\n\n"; 
fclose($fh);

# Example 2: Using file function
# Output is the exact same, it's just that the process is quicker.
# Only use when files aren't too large
# Largeness is quantified by the amount of available computer memory.
echo "Example 2: Using file function <br />\n";
$content2 = file("2.PHP/3. PHP & OS/5. Reading Files/4.IntoanArray/intoAnArray.txt"); # Reads entire file's contents into array
print_r($content);



?>

</body>
</html>