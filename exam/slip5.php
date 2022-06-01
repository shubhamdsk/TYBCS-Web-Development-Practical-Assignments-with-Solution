<!-- Write a PHP script to check how many times the
web page access.
[Use Cookies]  -->

<?php
if (isset($_COOKIE['cnt'])) {
    $x = $_COOKIE['cnt'];
    $x = $x + 1;
    setcookie('cnt', $x);
} else {
    setcookie('cnt', 1);
    echo "you accessed this page 1st time";
}
    echo "you accessed this page $x times";

?>