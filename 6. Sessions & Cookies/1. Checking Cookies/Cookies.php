<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Checking Cookies </title>
</head>

<body>
<h1> Checking Cookies </h1>   
<?php
#### About COOKIES #####
# Method by which sessions are passed.
# Cookies: small pieces of info that's sent to & from a web browser.
# Ex: Cookie that contains a user's full name.
# When session cookie is created, it uses a "hash value"
# Hash Value: long string of characters.
/* $_GET: associative array of variables passed to the current script via the URL parameters
 * $_COOKIE: associative array of variables passed to the current script via HTTP Cookies.
 * setcookie: Sends a cookie.
 * die: equivalent to exit keyword.
 * header: sends raw http header.
 * $_SERVER: array containing information such as headers, paths, and script locations.
*/

#setcookie() func
# Ex: Checks if cookies are enabled & displays corresponding message
if (isset($_GET['cookiecheck'])) {
    if(isset($_COOKIE['testcookie'])) {
        print "Cookies are enabled!";
    } else {
        print "Cookies are not enabled!";
    }
} else { 
    setcookie('testcookie', "testvalue"); # Send a cookie
    die(header("Location: " . $_SERVER['PHP_SELF'] . "?cookiecheck=1")); # Exit
}

?>

</body>
</html>