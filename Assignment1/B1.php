<?php
//session start

session_start();
$u=$_GET['user'];
$p=$_GET['pass'];

if(isset($_SESSION['count']))
{
	$_SESSION['count'] = $_SESSION['count'] +1;	
}

else
	{
		$_SESSION['count'] =1;
	}


if($_SESSION['count']<=3 && $u="shubham" && $p="great")
		{
			 echo "Welcome Man";
		}
	else
		{
			echo "Errors";
		}
?>
