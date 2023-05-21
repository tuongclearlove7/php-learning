<?php

$string = "";
if(isset($_POST['fullname'])){
    $fullname = $_POST['fullname'];
    $choose = $_POST['choose'];
    $index = strrpos($fullname,' ');
    switch ($choose) {
        case '1':
            
            $firstname = substr($fullname,$index);
            $string .= "ten la $firstname";

            break;
            case '2':
            $lastname = substr($fullname,0,$index);
            $string .= "<br> ho la $lastname";
            break;
            case '3':
            $upper = strtoupper($fullname);
            break;
            case '4':  
            $lower = strtoupper($fullname);
            break;
            case '5':

            break;
        default:
            # code...
            break;
    }

   
   

    

}


















