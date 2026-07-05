<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Date & Time </title>
</head>

<body>
<h1> Date & Time </h1>   
<?php
# Viewing the Timezone
$timezone = date_default_timezone_get(); # Gets the timezone
echo "The current timezone is: " . $timezone . "<br /><br />\n";

# Formatting a Date
# Use "date" function
# Syntax: $mydate = date("format",$timestamp);
$today = date("Y/m/d"); # Formats today's date in year/month/day format.
echo "Today's date is: " . $today . "<br /><br />\n";

# Storing Timestamp in Variable
# Option 1: time function: 
$today2 = time();
echo "Today's time is: " . $today2 . "<br /><br />\n";

# Option 2: strtotime function:
# Stores specific timestamps with keywords & abbreviations.
$today3 = strtotime("January 15 2014");
echo "Today's time is: " . $today3 . "<br /><br />\n";

# Differnt ways to use keywords & abbreviations with strtotime:
$importantDate1 = strtotime("tomorrow"); # 24 hours from now
echo "Tomorrow is: " . $importantDate1 . "<br />\n";
$importantDate2 = strtotime("now + 24 hours"); # Also 24 hours from now
echo "24 hours from now is: " . $importantDate2 . "<br />\n";
$importantDate3 = strtotime("last saturday"); # Last saturday
echo "24 hours from now is also: " . $importantDate3 . "<br />\n";
$importantDate4 = strtotime("8pm + 3 days"); # Three days from 8pm
echo "8pm + 3 days is: " . $importantDate4 . "<br />\n";
$importantDate5 = strtotime("2 weeks ago"); # Current time
echo "2 weeks ago was: " . $importantDate5 . "<br />\n";
$importantDate6 = strtotime("next year gmt"); # Next year in Greenwich(24hr) time
echo "Next year greenwich mean time is: " . $importantDate6 . "<br />\n";
$importantDate7 = strtotime("this 4am"); # 4AM today
echo "4am today: " . $importantDate7 . "<br /><br />\n";


# Calculating Time Passed Since Timestamp
$timespan = $today2 - $importantDate7; # Time Elapsed since 4AM this morning.
echo "Time Elapsed since 4AM: " . $timespan . "<br />\n";

# By Seconds: Gives number of seconds between a past event & today.
$timespan2 = (($today2 - $importantDate3)/60)/60; # Seconds elpased between last saturday & today.
echo "Seconds Elapsed between last Saturday & today: " . $timespan . "<br />\n";

?>

</body>
</html>