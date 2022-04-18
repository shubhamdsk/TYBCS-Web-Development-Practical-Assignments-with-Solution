<?php
ob_start();
echo "Style is : ".$_GET['s1']."<br>";
echo "Size is : ".$_GET['s']."<br>";
echo "Color is : ".$_GET['c']."<br>";
echo "Background color is : ".$_GET['b']."<br>";
setcookie("set1",$_GET['s1']);
setcookie("set2",$_GET['s']);
setcookie("set3",$_GET['c']);
setcookie("set4",$_GET['b']);
?>

<html>
<body>
<form action = "http://localhost/PHP/Practical/Assignment1/third.php">
<input type="submit" value="OK" value="submit">
</form>
</body>
</html>
