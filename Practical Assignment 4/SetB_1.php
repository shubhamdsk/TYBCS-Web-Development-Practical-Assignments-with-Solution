<?php
//Original Array on which operations is to be perform

$original_array = array( '1', '2', '3', '4', '5' );

echo 'Original array : ';
foreach ($original_array as $x)
{
echo "$x ";
}

echo "\n";

//value of new item
$inserted_value = '11';

//value of position at which insertion is to be done

$position = 2;

//array_splice() function

array_splice( $original_array, $position, 0, $inserted_value );  

echo "<br> After inserting  in the array is : ";
foreach ($original_array as $x)
{
echo "$x ";
}
?>
