
<?php
session_start();
$_SESSION['ename'] = $_GET['name'];
$_SESSION['eno'] = $_GET['num'];
$_SESSION['eadd'] = $_GET['add'];
?>


<html>
<body >
<form action = "slip8-2.php">
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
		<input type=submit name="submit" value="submit" class="btn orange" >
		</td>
		</tr>
	</table>
	</form>
	</body>

</html>