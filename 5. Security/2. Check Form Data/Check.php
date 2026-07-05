<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Checking Form Data </title>
</head>

<body>
<h1> Checking Form Data </h1>   

<?php
# Makes sure form input expects exactly what was specified.
$openform = "<form>"; # Opening form tag
$openLegend = "<legend> What is your sex? "; # Opens legend
$radio1 = "<input id = 'male' type = 'radio'><label for = 'male'> Male </label>"; # Radio button 1
$radio2 = "<input id = 'female' type = 'radio'><label for = 'female'> Female </label>"; # Radio button 2
$closeform = "</legend></form>"; # Closes legend & form
$fullform = "$openform <br/>\n $openLegend <br/>\n $radio1 <br/>\n $radio2 <br/>\n $closeform"; # Contains all markup
echo "$fullform <br />\n"; # Displays markup
if(preg_match("/(male|female)/",$radio1) or preg_match("/(male|female)/",$radio2)) # Tests if values are 
{ 
    echo "The form input is valid!";
} else {
    echo "The form input is invalid!";
}


?>

</body>
</html>