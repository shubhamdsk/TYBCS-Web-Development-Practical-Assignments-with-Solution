<?php
$str=$_GET['str'];
$menu=$_GET['menu'];
	switch($menu)
	{
		case "insert_ele_stack": Insert_ele_Stack($str);break;
		case "delete_ele_stack": Delete_ele_Stack($str);break;
		case "display_content_stack": Display_content_stack($str);break;
        case "insert_ele_que": Insert_ele_que($str);break;
		case "del_ele_que": Delete_ele_que($str);break;
        case "display_content_que": Display_content_que($str);break;
		}
        function Insert_ele_Stack($str)
        {
            $a = array(1,2,3,4);
            array_push($a,$str);
            print_r($a);
        }

        function Delete_ele_Stack($str)
        {
            $a = array(1,2,3,4);
            array_pop($a);
            print_r($a);
        }

        function Display_content_stack($str)
        {
            $a = array(1,2,3,4);
            print_r($a);
        }
        function Insert_ele_que($str)
        {
            $a = array(1,2,3,4);
            array_unshift($a,$str);
            print_r($a);
            
        }
        function Delete_ele_que($str)
        {
            $a = array(1,2,3,4);
            array_shift($a);
            print_r($a);
        }

        function Display_content_que($str)
        {
            $a = array(1,2,3,4);
            print_r($a);
        }
?>