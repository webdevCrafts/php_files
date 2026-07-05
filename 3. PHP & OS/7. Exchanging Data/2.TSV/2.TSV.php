<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> TSV </title>
</head>

<body>
<h1> TSV (Tab-delimited File) </h1>   
<?php
# Tabs represented by "\t"
# SYNTAX: $varname = fgetcsv($fh,constant, "\t");
/* Script Name: CSV to TSV
 * Description: Reads in CSV file and outputs a
 * TSV file. CSV must have a .CSV ext.
 */

$myfile = "/home/tyler-a/WebDev/2.PHP/3. PHP & OS/7. Exchanging Data/2.TSV/testing"; # Defines filename as testing.txt
function convert($filename) # Defines function named "convert" with one parameter: $filename
{ 
  if( @$fh_in = fopen("{$filename}.csv","r")) # Opens file with filename that was passed to function with .csv extension, in read mode.
  { 
    $fh_out = fopen("{$filename}.tsv","a"); # Opens file that has filename that was passed to function with .tsv extension in append mode.
    while( !feof($fh_in)) # Loops though csv file as long as eof not reached
    { 
        $line = fgetcsv($fh_in,1024); # Reads one line from input file into the $line array.
        if( $line[0] == "") # Tests if line from input file has text.
        { 
            fwrite($fh_out,"\n"); # If not, then new line char "\n" is stored in $fh_out.
        }
        else { 
            # Implode func converts array $line into a string.
            fwrite($fh_out,implode("\t",$line)."\n"); # Converts array elm into string & writes it into output file.
        }
    }
    fclose($fh_in); # Close connection to CSV
    fclose($fh_out); # Close connection to TSV
  }
  else { # When input file can't be found
    echo "File doesn't exist\n"; # Report file non-existent
    return false; # Failed; return false.
  }
  echo "Conversion completed!\n"; # Report conversion completed
  return true; # Successful; return true.
}
convert($myfile); # Calls function, passes name of file to function to process.

?>

</body>
</html>