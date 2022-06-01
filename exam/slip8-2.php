
<?php
session_start();
$_SESSION['ebasic'] = $_GET['bs'];
$_SESSION['empda'] = $_GET['da'];
$_SESSION['empdha'] = $_GET['hda'];

$number = $_SESSION['eno'];
$name = $_SESSION['ename'];
$address = $_SESSION['eadd'];
$basic = $_SESSION['ebasic'];
$da = $_SESSION['empda'];
$hda = $_SESSION['empdha'];

echo "<h3> Employee Details" . "<br>"."<h3>";

echo "Employee Number : " . $number . "<br>";
echo "Employee Name : " . $name . "<br>";
echo "Employee Address : " . $address . "<br>";
echo "Employee Basic Salary : " . $basic . "<br>";
echo "Employee DA Salary : " . $da . "<br>";
echo "Employee HDA Salary : " . $hda . "<br>";

$total = $basic + $da + $hda;

echo "Total Salary is : " . $total . "<br>";
?>
