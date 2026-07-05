<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> CSV </title>
</head>

<body>
<h1> CSV (Comma-delimited) Files </h1>   
<?php
# Example: 1: Creating a CSV File
# Following 3 Variables are defined array elements.
echo "Example: 1: Creating a CSV File <br />\n";
$addresses[] = "John Smith,1234 Oak St.,Big City,Or,99999"; 
$addresses[] = "Mary Jones,5678 Pine St.,Bigger City,ME,11111";
$addresses[] = "Luis Rojas,0990 Elm St.,Biggest City,TX,88888";

$fh = fopen("/home/tyler-a/WebDev/2.PHP/3. PHP & OS/7. Exchanging Data/1.CSV/addressbook.txt","a"); # Opens filepath to txt file & appends array elms at the eof.

if(is_file("/home/tyler-a/WebDev/2.PHP/3. PHP & OS/7. Exchanging Data/1.CSV/addressbook.txt")) # Tests if filepath exists
{   
    
    for($i=0; $i < 3;$i++) # As long as $i is less than 3, increment by 1 until 3.
    { 
        fwrite($fh,$addresses[$i]."\n"); # While $i is less than 3, write each address into the flat file.
    }
    echo "All the addresses transported to the file successfully!\n\n";
}    
    fclose($fh); # Once done, close connection

# Example 2: Reading CSV File
#fgetcsv stores found line as an array element
# To read entire line, use number of chars that's longer than longest line.
echo "Example 2: Reading CSV File \n";
$csvfilepath = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/7. Exchanging Data/1.CSV/addressbook.txt";
if (is_file($csvfilepath))
{
    $mycsv = fopen("/home/tyler-a/WebDev/2.PHP/3. PHP & OS/7. Exchanging Data/1.CSV/addressbook.txt","r");
    $addresses = fgetcsv($mycsv,1000); # Gets first line from CSV & 1000 is amount of chars to read & is stored as an array.
    echo "The csv file has been read.\n"; # Say it's been read
    print_r($addresses);
}


?>

</body>
</html>