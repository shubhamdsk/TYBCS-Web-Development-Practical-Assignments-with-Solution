<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$menu =$_GET['menu'];
	switch($menu)
	{
		case "mod": Mod($num1,$num2);break;
		// case "pow": Power($num1,$num2);break;
		// case "sum": Sum_of_no($num1);break;
		// case "fact": Fact($str);break;
		}
        function Mod($num1,$num2)
        {
            $m = $num1 % $num2;
            echo $m;
        }
?>