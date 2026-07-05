<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Piece by Piece </title>
</head>

<body>
<h1> Reading Files Piece by Piece </h1>   
<?php
# SYNTAX: fgets($hostname,constant(a number)); 
$fh = fopen("2.PHP/3. PHP & OS/5. Reading Files/3.PiecebyPiece/piecebypiece.txt","r");
echo "Here are the contents of the fh in only four-character format <br />\n";
while(!feof($fh)) # As long as eof not reached in $fh
{ 
    $char4 = fgets($fh,5); # Reads each four-character string until eof
    echo "$char4\n";
}


?>

</body>
</html>