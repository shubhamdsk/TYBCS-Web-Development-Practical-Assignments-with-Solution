<!-- Write a PHP script to check how many times the web
page access.
[Use Session]  -->

<?php
//session start
session_start();
if (isset($_SESSION['count'])) {
    $_SESSION['count'] = $_SESSION['count'] + 1;
} else {
    $_SESSION['count'] = 1;
}
echo " No of times the web page has been access " . $_SESSION['count'];
?>