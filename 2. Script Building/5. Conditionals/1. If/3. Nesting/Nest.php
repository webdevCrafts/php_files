<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Nesting </title>
</head>

<body>
<h1> Nesting If Statements </h1>   
<?php
# Sends emails or letters to customers in Idaho 
$custState = "ID";
$custname = "Harry";
$EmailAdd = "harrystyles@gmail.com";
if ( $custState == "ID") # If customer lives in Idaho
{ 
    if (empty($EmailAdd)) # If customer in ID doesn't have an Email
    { 
      $contactMethod = "letter";
      echo "My contact method for $custname will have to be $contactMethod
            because the customer doesn't have an email.";
    }   
    else 
    {
      $contactMethod = "email"; # The customer has an email
      echo "My contact method for $custname will have to be $contactMethod.<br />\n";    
      echo "The customer's email is $EmailAdd.";
    }
}
else 
{ 
       $contactMethod = "no contact method needed."; # If customer lives elsewhere; don't contact.
       echo $contactMethod . "because the customer lives in $custState.";
}

?>

</body>
</html>