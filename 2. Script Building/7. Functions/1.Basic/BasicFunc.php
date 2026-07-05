<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Basic Func </title>
</head>

<body>
<h1> Basic Function </h1>   
<?php
# SYNTAX:
/* 
function functionname()
{ 
    block of statements;
    return;
}
*/

# Displays Polo Ralph Lauren Logo
function display_logo()
{ 
    echo "<p>
          <img src ='https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogosmarcas.net%2Fwp-content%2Fuploads%2F2020%2F04%2FLOreal-Logo-Emblema.jpg&f=1&nofb=1&ipt=e2c2c6a095cceb749d1127237ff3df1b08b1312465419687627e6758f7c1136e'
               width ='250' 
               height= '250' 
               hspace= '10' 
               align= 'left'
               style= 'border-radius: 10em; border: 0.23em solid black; box-shadow: gray 0.10em 0.10em 1em;' />
        </p>\n"; # Displays the image in webpage
    echo "<p style= 'font-size: x-large'> Polo Ralph Lauren </p>\n"; # Displays company name as text.
    echo "<p style= 'font-style: italic; text-decoration: underline;'> Quality Products </p>\n"; # Displays "Quality Products" as text.
    return; # Immediately ends execution of the current function, & returns its argument as the value of the function call.
}
display_logo(); # Calls Function

?>

</body>
</html>