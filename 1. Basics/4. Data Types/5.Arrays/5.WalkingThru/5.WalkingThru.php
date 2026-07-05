<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Walking Through </title>
</head>

<body>
<h1> Walking Through Arrays </h1>   
<?php
# Manually
# Includes following instructions:
/* Array name goes inside parenthesis
1. current(): value currently under pointer; doesn't move pointer.
2. next(): value after current value.
3. previous(): value before current pointer location.
4. end(): last value in array.
5. reset(): first value in array.
*/
echo ("Manually Walks Through Array: <br />\n");
$capitals = array ('CA'=>'Sacramento', 'OR'=>'Salem', 'TX'=>'Austin');

$value = current ($capitals); # Pointer is currently on Salem.
echo "$value<br />\n">
$value = next ($capitals); # Move pointer to Austin.
echo "$value<br />\n";
$value = next ($capitals);
echo "$value";
echo ("<br /><br />\n");

# Automatically 
# Uses "foreach" statement: walks through array values one by one starting from beginning.
# Current key & value of array can be used in block of statements each time block executes.
/* General format: 
    foreach($arrayname as $keyname => $valuename)
    { statement block }
*/
# Walks through sample array of state capitals & echoes a list:
echo ("Walks through sample array of state capitals & echoes a list: <br />\n");
$capitals2 = array("AK" => "Juneau", "WA" => "Olympia", "KA" => "Topeka");
ksort($capitals2); # Sorts array by keyname in alphabetical order
foreach($capitals2 as $state => $city) # Turn the array elms into $state => $city variables.
{ 
    echo "$city, $state<br />\n"; # Echo each value & format as Capital City, State.
}
?>


</body>
</html>
