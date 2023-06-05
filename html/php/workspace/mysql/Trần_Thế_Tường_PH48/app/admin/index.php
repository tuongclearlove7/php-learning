<?php

session_start();

$controller = filter_input(INPUT_POST,'controller');
if(empty($controller)){
    $controller = filter_input(INPUT_GET,'controller');
    if(empty($controller)){
        $controller = 'homeController';
    }
}



switch ($controller) {
   
    case 'homeController':
        include('./controller/homeController.php');
        break;
    case 'categoryController':
        include('./controller/categoryController.php');
        break;
    case 'productController':
        include('./controller/productController.php');
        break;
    case 'orderitemController':
        include('./controller/orderitemController.php');
        break;
   
    case 'homepage':
        include('./controller/homeController.php');
        break;
    default:
        
        break;
}


























?>












































