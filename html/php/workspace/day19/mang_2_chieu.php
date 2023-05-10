<?php 

$n = 2;
$m = 2;
$matrix = [

    [1,2],[3,4]
];



$choose = 3;

switch ($choose) {
    case 1:
        echo "\n <br> in mang : ";
        print_r($matrix);
        break;
    case 2:
        
        print_r($matrix);
        break;
    case 3:
        for($i = 0; $i < $n; $i++) {
            for($j = 0; $j < $m; $j++){
                echo $matrix[$i][$j];
            }
        }
        break;
    default:
        break;
}
























