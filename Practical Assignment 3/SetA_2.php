<?php
$str=$_GET['str'];
$menu=$_GET['menu'];
	switch($menu)
	{
		case "Length": Length($str);break;
		case "Count": Mycount($str);break;
		case "Lower": LowerCase($str);break;
		case "concatstar": concatstar($str);break;
		case "whitespaces":SpaceRemove($str);break;
		case "reverse": Reverse($str);break;
		}
		function Length($str)
		{
			for($i=0; $str[$i]!=null; $i++);
			echo "$str<br>"."Length : ".$i;
		}
	function Mycount($str)
	{
		$cntch=0;
		for($i=0; $str[$i]!=null; $i++)
		{
		if($str[$i]=='a'  || $str[$i]=='e'  || $str[$i]=='i'  || $str[$i]=='o'  || $str[$i]=='u'   )
		$cntch++;
		}		
		echo "$str<br>"."No. of Vowels : ".$cntch;
	}
	function LowerCase($str)
	{
		$lower = strtolower($str);
		echo "Original String : "."$str<br>";
		echo "LowerCase String : "."$lower<br>";
	}
	function concatstar($str)
	{
	echo 
	str_pad( $str ,11, "*" , STR_PAD_BOTH);
	}
	
	function SpaceRemove($str)
	{
	echo trim($str);
	}

	function Reverse($str)
	{
	echo strrev($str);
	}
?>
