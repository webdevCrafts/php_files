<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> If Statements </title>
</head>

<body>
<h1> If Statements </h1>   
<?php
# Test Score Grade
$score = "94";
# If score is greater than 92, then it's an A.
if ($score > 92) 
{ 
    $grade = "A";
    $message = "Excellent! Your score is $score!";
    echo $message . "<br />\n";
}
# If score is less than or equal to 92 and greater than 83, then it's a B.
else if ($score <= 92 and $score > 83)
{ 
    $grade = "B";
    $message = "Good! Your score is $score!";
    echo $message . "<br />\n";
} 
# If score is less than or equal to 83 and greater than 74, then it's a C.
else if ($score <=83 and $score > 74)
{ 
    $grade = "C";
    $message = "Okay. Your score is $score.";
    echo $message . "<br />\n";
} 
# If score is less than or equal to 74 and greater than 62, then it's a D.
else if ($score <=74 and $score > 62)
{ 
    $grade = "D";
    $message = "Uh Oh! Your score is $score.";
    echo $message . "<br />\n";
} 
# If score is less than 62, then it's an F.
else {
    $grade = "F";
    $message = "Doom is upon you! Your score is $score.";
    echo $message . "<br />\n";
}
?>

</body>
</html>