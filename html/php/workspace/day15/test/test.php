<h1>
<?php 
    require("../function.php");
    echo "Hello ./test/test.php <br> ";

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $d = $_GET['d'];

    if($a == null || $b == null || $c == null || $d == null){
        echo"vui long nhap vao";
    }
    else{
        $delta = $b**2 - 3 * $a * $c;
        $k = (3**2 * $a * $b * $c - 2 * $b**3 - 27 * $a**2 * $d) / (2 * abs($delta**3**(1/2)));
        if($a == 0)
            echo "\nhe so a phai khac 0";
        else
            if($delta > 0)
                if(abs($k) <= 1)
                    echo "phuong trinh co 3 nghiem";
                if(abs($k) > 1)
                    echo "phuong trinh co 1 nghiem duy nhat";
            if($delta == 0)
                echo "phuong trinh co 1 nghiem boi";
            if($delta < 0)
                echo "phuong trinh co 1 nghiem duy nhat";
    }
    ?>
</h1>













