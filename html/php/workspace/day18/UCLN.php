<?php


$res2 = "";
if(isset($_POST['a']) && isset($_POST['b'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    if($a == null || $b == null)
        $res2 = "vui long nhap vao";
    else
        if($a > 0 && $b > 0){
            while($a != $b){
                if($a > $b)
                    $a = $a - $b;
                else
                    $b = $b - $a;
            }
            $res2 .= "uoc chung lon nhat la $a";
        }
        else{
            $res2 .= "khong hop le";
        }
}



?>


































