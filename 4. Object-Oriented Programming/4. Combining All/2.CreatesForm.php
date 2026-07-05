<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Creates Form </title>
</head>

<body>
<h1> Script that Creates a Form </h1>    
<?php
/* Script name: buildForm
 * Description: Uses the form to create simple HTML form
 */
require_once("2.PHP/4. Object-Oriented Programming/4. Combining All/form.php");
echo "<!doctype HTML><html><head><title> Phone Form </title></head><body> <br />\n";
$phone_form = new Form("process.php","Submit Phone");
$phone_form->addField("first_name","First Name");
$phone_form->addField("last_name","Last Name");
$phone_form->addField("phone","Phone");
echo "<h3> Please fill out the following form: <br />\n </h3>";
$phone_form->displayForm();
echo "</body></html>";

?>

</body>
</html>