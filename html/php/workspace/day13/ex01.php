<?php
    $a=2; $b=4;
    if(isset($_GET['a'])&& isset($_GET['b'])){
        $a=$_GET['a'];
        $b=$_GET['b'];
    }    
    echo "<br>Trước khi hoán đổi a = $a , b = $b";
    //Chuyển giá trị a vào biến c
    $c = $a;
    //Chuyển giá trị của b cho a
    $a = $b;
    //Chuyển giá trị của c cho b
    $b = $c;
    echo "<br>Sau khi hoán đổi a = $a , b = $b";

?>