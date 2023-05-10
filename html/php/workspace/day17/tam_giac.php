<?php
$res = "";

if(isset($_POST['n'])){

    for($i = 0; $i <= $n; $i++){
        for($j = 0; $j < $i; $j++){
            $res .= "* ";
        }

        $res .= "<br>";
    }
}else{
    $res = "vui long nhap vao";
}

?>