<?php
session_start();
$_SESSION['ename']=$_GET['name'];
$_SESSION['eno']=$_GET['num'];
$_SESSION['eadd']=$_GET['add'];
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
<form action = "http://localhost/PHP/Practical/Web-Development/Assignment1/B2.php">
	<table class="center"    style = "background-color:powderblue"  >
<caption>Basic Salary</caption>
	<tr>
		<td>
		Enter Basic Salary:
		</td>
		<td>
		<input type="text" name="bs"   required>
		</td>
		</tr>

		<tr>
		<td>
		Enter DA :
		</td>
		<td>
		<input type="text" name="da"   required>
		</td>
		</tr>

		<tr>
		<td>
		Enter HRA :
		</td>
		<td>
		<input type="text" name="hda"   required>
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
