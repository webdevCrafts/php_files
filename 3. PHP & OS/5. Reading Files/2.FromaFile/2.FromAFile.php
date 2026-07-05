<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> From a File </title>
</head>

<body>
<h1> Reading From a File </h1>   
<?php
# Example 1: Reads a line from specified dir
# $fh holds the pointer to open file. It's like a doorstop to allow access whenever desired.
echo "Example 1: Reads a line from specified dir <br />\n";
$fh = fopen("2.PHP/3. PHP & OS/5. Reading Files/2.FromaFile/file1.txt","r");
$line = fgets($fh); # Reads a string until encountering eol or eof (end of line or end of file, respectively).
print_r($line);
echo "<br /><br />\n\n";

# Performs the same, code as above, but just notifies when eof has been reached.
# Example 2: Notifying that eof has been reached
# feof tells you when reaches eof
echo "Example 2: Notifying that eof has been reached <br />\n";
$fh2 = fopen("2.PHP/3. PHP & OS/5. Reading Files/2.FromaFile/file1.txt","r");
$line2 = fgets($fh2);
while(!feof($fh2)) # As long as it doesn't reach the eof in the filepath in $fh.
{ 
    $line2 = fgets($fh2); # Then continue to read the files in the filepath.
     print_r($line2); 
     echo "<br /><br />\n\n"; # Then echo each line of text from inside the file   
}

# Performs the same code as ex 1, but removes trailing blank spaces
# Example 3: Removing any Trailing Blank spaces
echo "Example 3: Removing any Trailing Blank spaces <br />\n";
$fh3 = fopen("2.PHP/3. PHP & OS/5. Reading Files/2.FromaFile/file1.txt","r");
$line3 = fgets($fh3);
while(!feof($fh3))
{ 
    $line3 = rtrim(fgets($fh3)); # Strip whitespace or other chars from end of string
    echo "$line3 <br />\n";
}
?>

</body>
</html>