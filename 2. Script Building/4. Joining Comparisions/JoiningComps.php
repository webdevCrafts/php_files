<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Joining Comparisions </title>
</head>

<body>
<h1> Joining Multiple Comparisions </h1>   
<?php
# Syntax: comparison1 and|or|xor comparison 2 and|or|xor comparison3 and|or|xor ...

# Examples:
# Example 1: Equal in value.
$ageBobby = 22;
# Bobby is 21 or he's 22 years old.
if ($ageBobby == 21 or $ageBobby == 22) {
    echo "Yes bobby is $ageBobby. <br />\n";
} else {
    echo "No bobby isn't old enough! <br />\n";
}

# Example 2 :Greater than value and equal to value.
$ageSally = "30";
$state1 = "OR";
# If Sally is older than 29 and lives in Oregon.
if ($ageSally > 29 and $state1 == "OR") { 
    echo "Yes sally is $ageSally years old & she lives in $state1!<br />\n";
# If Sally is younger than 29 but lives in Oregon.
} else if ($ageSally < 29 and $state1 == "OR") {
    echo "No, Sally is too young, but she lives in $state1.<br />\n";
# If Sally is older thann than 29 but doesn't live in Oregon.    
} else if ($ageSally > 29 and $state1 != "OR" ) {
    echo "Sally is older than 29, but she lives in $state1.<br />\n";
# If Sally is younger than 29 and doesn't live in Oregon.
} else {
    echo "No, Sally is too young and she doesn't live in $state1.<br />\n";
}
###################################################
# (7/20/25 E:12:42 P.328 Tot T: 2hr 56min Tot P:6)#
###################################################
###########################
# (7/21/25 S:3:17 P.328 ) #
###########################

# Example 3: Greater than value or equal to another or both.
# Sally is older than 29 or lives in Oregon or both.
$ageSally2 = 34;
$state2 = "OR";
if ($ageSally2 > 29 or $state == "OR") {
    echo "Yay Sally is older than 29 or she lives in Oregon or both?! <br />\n";
} else {
    echo "Nooo! Sally is not older than 29 and doesn't live in Oregon! <br />\n";
}

# Example 4: Xor: Equals one value or the other value; not both.
# The city is Reno or state is Oregon, BUT NOT BOTH.
$city = "Reno";
$state3 = "CA";
if ($city == "Reno" xor $state3 == "OR") {
    echo "Valid! The city or state is correct.<br />\n";
}  else {
    echo "Invalid, the city & state can't both be correct.<br />\n";
}

# Example 5: Not equal in value and less than.
# The name is not Sam and age is under 13 years of age.
$name = "Murphy";
$age = 10;
if ($name != "Sam" and $age < 13) {
    echo "Yay, the name isn't Sam & the age is less than 13!<br />\n";
} else {
    echo "Nooo! The name is $name & the age is greater than 13!!<br />\n";
}

?>

</body>
</html>