<?php
session_start();
$_SESSION['cname']=$_GET['name'];
$_SESSION['cadd']=$_GET['add'];
$_SESSION['cno']=$_GET['num'];
?>

<html>
<body >		
		<style>
		table,tr,td{
		border :1px solid black ;
		border-collapse : collapse;
		}
		tr,td{
		padding : 10px;
		}
		table.center{
		margin-left:auto;
		margin-right:auto;
		}
		.btn{
		border :2px solid black ;
		background-color:white;
		color:black;
		padding: 8px 16px;
		font-size:16px;
		cursor:pointer;
		border-radius:5px;
		}
		.success:hover{
		background-color:#04AA6D;
		color:white;
		}
		.orange:hover{
		background:#f44336;
		color:white;
		}
		</style>
<form action = "http://localhost/PHP/Practical/Assignment1/A5.php">
	<table class="center"    style = "background-color:powderblue"  >
<caption>Product Information</caption>
	<tr>
		<td>
		Enter Product Name:
		</td>
		<td>
		<input type="text" name="pname"   required>
		</td>
		</tr>

		<tr>
		<td>
		Enter Quantity:
		</td>
		<td>
		<input type="text" name="q"   required>
		</td>
		</tr>

		<tr>
		<td>
		Enter Rate :
		</td>
		<td>
		<input type="text" name="rate"   required>
		</td>
		</tr>

		<tr>
		<td>
		</td>
		<td>
		<input type=submit name="submit" value="submit" class="btn orange" >
		</td>
		</tr>
	</table>
	</form>
	</body>

</html>
