<?php 
//kiem tra xem ng dung co nhap vao khong
$res = "";

if(isset($_POST['n'])){
    $n = $_POST['n'];
    $sum = 0;

    //tinh tong
    for($i = 1; $i <= $n; $i++){
        $sum = $sum + $i;
    }

    //xu ly so chan
    for($i = 0; $i <= $n; $i++){
        if($i%2 == 0)
            $res .= $i. " ";
    }

    $result = "tong cua so $n la : $sum <br>";
}
else{
     $result = "vui long nhap vao";
}



?>