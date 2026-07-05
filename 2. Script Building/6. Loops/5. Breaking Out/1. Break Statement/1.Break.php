<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Break Statement </title>
</head>

<body>
<h1> Break Statement </h1>   
<?php
# Stops loop as soon as $counter is equal to 3.
$counter = 0; # sets counter equal to 0.
while ( $counter < 5 ) # As long as the $counter var is less than 5.
{ 
    $counter++; # Increment the value of $counter by 1.
    if ( $counter == 3) # Once the value of $counter is equal to 3.
    { 
        echo "break <br />\n"; # Output the word "break"
        break; # Skip to the statements outside the loop & execute them.
    }
    echo "Last line in loop: counter = $counter <br />\n"; # Echos the lines in loop before it broke out, which in this case were 1 & 2.
}
echo "First line after loop <br />\n\n"; # Echoes text, which is the first line after breaking out of loop.
?>

</body>
</html>