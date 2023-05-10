<?php
$res = "";
if(isset($_POST['month']) && isset($_POST['year'])){
    $month = $_POST['month'];
    $year = $_POST['year'];

    if($month == null || $year == null)
        $res = "vui long nhap vao";
    else
        switch($month){

            case 1:
                
            break;
            case 2:
                if (($year % 100 != 0 && $year % 4 == 0) || $year % 400 == 0) 
                    $res .= "thang $month nam $year co 29 ngay";
                else 
                    $res .= "thang $month nam $year co 28 ngay";
            break;       
            case 3:
                $res .= "thang $month co 30 ngay";
            break;
            case 4:
                $res .= "thang $month co 30 ngay";
            break;
            case 5:
                $res .= "thang $month co 30 ngay";
            break;
            case 6:
                $res .= "thang $month co 30 ngay";
            break;
            case 7:

            break;
            case 8:

            break;
            case 9:

            break;
            case 10:

            break;
            case 11:
                $res .= "thang $month nam $year co 30 ngay";
            break;
            case 12:
                $res .= "thang $month nam $year co 31 ngay";
            break;
            default:
            $res .= "thang $month nam $year khong hop le";
            break;
        }
}

?>



























