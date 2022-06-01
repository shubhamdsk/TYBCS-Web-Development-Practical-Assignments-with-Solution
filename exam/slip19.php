<!-- Write a PHP script to accept username and
password. If in the first three
 chances, username and password entered is
correct then display second
 form with ‘Welcome” message ,User name
otherwise display error message [Use Session]  -->

<?php
//session start

session_start();
$u = $_GET['user'];
$p = $_GET['pass'];

if (isset($_SESSION['count'])) {
    $_SESSION['count'] = $_SESSION['count'] + 1;
} else {
    $_SESSION['count'] = 1;
}

if ($_SESSION['count'] <= 3 && $u = "php" && $p = "php123") {
    echo "Welcome";
} else {
    echo "Error";
}
?>
