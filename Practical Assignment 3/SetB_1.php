<?php
$str1=$_GET['str1'];
$str2=$_GET['str2'];
$menu=$_GET['menu'];

	switch($menu)
	{
		case "small": $pos=strpos($str1,$str2);break;
        if($pos!=0)
			echo"String '$str2' Not present at the start of  '$str1'.<br>";
		else
			echo"String '$str2' Present at the start of '$str1'.<br>";

		}
		
?>