<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Continue Statement </title>
</head>

<body>
<h1> Continue Statement </h1>   
<?php
# Skips the 3rd iteration & continues loop afterward, but stops at 5.
$counter = 0; # Sets counter equal to 0.
while ( $counter < 5 ) # As long as $counter is less than 5.
{ 
    $counter++; # Increment counter by 1.
    if ( $counter == 3 ) # Once $counter is equal to 3.
    { 
        echo "continue <br />\n"; # Echo the word "continue"
        continue; # Stops the 3rd iteration of the loop & jumps back to top of loop to start.
    }
    echo "Last line in loop: counter=$counter <br />\n"; # Echoes the last lines in the loop before value is 5.
}
echo "First line after loop <br />\n"; 


?>

</body>
</html>