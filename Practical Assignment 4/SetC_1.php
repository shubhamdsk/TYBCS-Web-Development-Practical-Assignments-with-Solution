<?php

$str1 = array("Sophia"=> "31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");



$menu=$_GET['menu'];

switch ($menu) {

    case 'avalue':avalue($str1);break;

    case "akey":akey($str1);break;
    
    case "dvalue":dvalue($str1);break;
    
    case "dkey":dkey($str1);break;
    

}

function avalue($str1){
    print_r($str1);
    echo "<br>";
    echo "<br> Ascending order sort by value <br>";
    echo "<br>";
    asort($str1);
    print_r($str1);
}

function akey($str1){
    print_r($str1);
    echo "<br>";
    echo "<br> Ascending order sort by Key <br>";
    echo "<br>";
    ksort($str1);
    print_r($str1);
}

    
function dvalue($str1){
    print_r($str1);
    echo "<br>";
    echo "<br> Descending order sort by Value <br>";
    echo "<br>";
    arsort($str1);
    print_r($str1);
}

function dkey($str1){
    print_r($str1);
    echo "<br>";
    echo "<br> Descending order sort by Key <br>";
    echo "<br>";
    krsort($str1);
    print_r($str1);
}

?>