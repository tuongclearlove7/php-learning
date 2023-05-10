<?php 

$numbersArray = [10,6,19,4,25,20,17,45,90,28];
$stringArray = []; 
$stringArray[0] = 'tuong';
$numbersArray[] = 299;
$res = "";
$array = [];
$myArray = [1,2,3];

// var_dump($numbersArray);
// echo"<br\n>";
// print_r($stringArray);
// echo"<br\n>";
// echo "phan tu mang co chi so thu 2 trong mang la : " .$numbersArray[2];
// echo "\n<br>phan tu mang co chi so thu 0 trong mang la : " .$stringArray[0];

if(isset($_POST['choose'])){
    $choose = $_POST['choose'];

    switch ($choose) {
        case 1:
            $array = $myArray;
        break;
        case 2:
            $user = 1;
            //$myArray[] = $user;
            $search = "";
            for($i = 0; $i < count($myArray); $i++){
                if($user == $myArray[$i])
                    $res .= "\n$user co ton tai trong mang";
            }
        break;
        case 3:
            $max = $myArray[0];
            for($i = 0; $i < count($myArray); $i++){
                if($myArray[$i] > $max)
                    $max = $myArray[$i];
            }
            $res .= "max : $max";
        break;
        case 4:
            $sum = 0;
            for($i = 0; $i < count($myArray); $i++){
                    $sum = $sum + $myArray[$i];
            }
            $res .= "\n<br> sum : $sum";
        break;
        case 5:
            $temp = 0;
            for($i = 0; $i < count($myArray); $i++){
                for($j = 0; $j < $i + 1; $j++){
                    if($myArray[$i] > $myArray[$j]){
                        $temp = $myArray[$i];
                        $myArray[$i] = $myArray[$j];
                        $myArray[$i] = $temp;
                    }
                }
            }
            for($i = 0; $i < count($myArray); $i++){
                $res .= " <br>\n" .$myArray[$i];
            }
        break;
        case 6:
            for($i = 0; $i < count($numbersArray); $i++){
                $res .= $numbersArray[$i] .", ";
            }
        break;
        default:
            
        break;
    }


}

















