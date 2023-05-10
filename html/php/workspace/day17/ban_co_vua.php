<?php

$res2 = "";


if(isset($_POST['n'])){

    for($i = 0; $i < $n; $i++){
        $res2 .= "<tr>";
        for($j = 0; $j < $n; $j++){
            if(($i + $j)%2 == 0)
                $res2 .= "<td class='black'>  </td>";
            else    
                $res2 .= "<td class='white'>  </td>";
        }

        $res2 .= "</tr>";
    }
}else{
    $res2 = "vui long nhap vao";
}

?>