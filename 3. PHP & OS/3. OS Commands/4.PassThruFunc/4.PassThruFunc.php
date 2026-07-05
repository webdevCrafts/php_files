<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> PassThru </title>
</head>

<body>
<h1> PassThru Function </h1>   
<?php
# Executes system command & displays output exactly as returned
# Displays directory listing but returns nothing.
passthru("dir /home/tyler-a/Videos");
echo "<br />\n";
echo "Although the output is displayed, it's not returned to the script.";
?>

</body>
</html>