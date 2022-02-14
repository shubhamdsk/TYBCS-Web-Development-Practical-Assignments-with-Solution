<?php

$str1 = array(1,2,3,4,6,5,8,9,7);
$str2 = array(1,2,33,43,66,5);

$array1=array("red","green");
$array2=array("black","black");

$menu=$_GET['menu'];

switch ($menu) {

    case 'chunk':chunks($str1);break;

    case "vsort":vsort($str1);break;
    
    case "afilter":afilter($str1);break;
    
    case "merge":merge($array1,$array2);break;
    
    case "intersection":intersection($str1,$str2);break;
    
    case "union":union($str1,$str2);break;
    
    case "Setdiff":Setdiff($str1,$str2);break;

}

function chunks($str1){
    print_r($str1);
    echo "<br>";
    echo "<br> An Array Split into chunks <br>";
    echo "<br>";
    print_r(array_chunk($str1,3));
}

function vsort($str1){
    echo "<br>An array Sorted by Values <br>";
    echo "<br>";
    asort($str1);
    print_r($str1);
}

function isodd($element){
    if ($element %2 !=0) {
        return TRUE;
    } else {
        return FALSE;
    };
}
function afilter($str1){
    echo "<br>Filter the odd element from an array <br>";
    echo "<br>";
    print_r(array_filter($str1,"isodd"));
}
    
function merge($array1,$array2){
    print_r($array1);
    echo "<br>";
    print_r($array2);
    echo "<br>";
    echo "<br>Merge the given an Array <br>";
    echo "<br>";
    print_r(array_merge($array1,$array2));
}
function intersection($str1,$str2){
    
    print_r($str1);
    echo "<br>";
    print_r($str2);
    echo "<br>";
    echo "<br>Find the intersection of two  Arrays <br>";
    echo "<br>";
    print_r(array_intersect($str1,$str2));
}

function union($str1,$str2){
    print_r($str1);
    echo "<br>";
    print_r($str2);
    echo "<br>";
    echo "<br>Find the union of two  Arrays <br>";
    echo "<br>";
    print_r(array_merge($str1,$str2));
}
function Setdiff($str1,$str2){
    print_r($str1);
    echo "<br>";
    print_r($str2);
    echo "<br>";
    echo "<br>Find set difference of two Arrays <br>";
    echo "<br>";
    print_r(array_diff($str1,$str2));
}

?>