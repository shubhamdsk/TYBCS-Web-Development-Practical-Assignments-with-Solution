<?php
session_start();
$_SESSION['pname']=$_GET['pname'];
$_SESSION['pqty']=$_GET['q'];
$_SESSION['prate']=$_GET['rate'];

$name = $_SESSION['cname'];
$address = $_SESSION['cadd'];
$number = $_SESSION['cno'];
$product =$_SESSION['pname'];
$quantity = $_SESSION['pqty'];
$rate =$_SESSION['prate'];

echo "Bill Details"."<br>";

echo "Customer Name : ".$name."<br>";
echo "Customer Address : ".$address."<br>";
echo "Customer Number : ".$number."<br>";
echo "Product Name : ".$product."<br>";
echo "Product Quantity : ".$quantity."<br>";
echo "Product Rate : ".$rate."<br>";
$total = $quantity*$rate;
echo "Total : ".$total."<br>";
?>
