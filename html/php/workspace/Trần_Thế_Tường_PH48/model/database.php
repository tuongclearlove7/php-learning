<?php 




$products = [

    ['name'=>'iphone','description'=>'Gía gấp đôi','price'=>1200000],
     ['name'=>'samsung','description'=>'Gía gấp đôi','price'=>2800000],
     ['name'=>'vivo','description'=>'Gía gấp đôi','price'=>4100000],
     ['name'=>'realme','description'=>'Gía gấp đôi','price'=>3700000],
     ['name'=>'oppo','description'=>'Gía gấp đôi','price'=>2700000],
];


if(isset($_SESSION['products'])){
    //gán session cho mảng students
    $products = $_SESSION['products'];
}else{
    $products =[];

}


?>





































