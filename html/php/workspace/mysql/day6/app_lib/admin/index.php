<?php


$controller = filter_input(INPUT_POST,'controller');
if(empty($controller)){
    $controller = filter_input(INPUT_GET,'controller');
    if(empty($controller)){
        $controller = 'home';
    }
}

switch ($controller) {
    case 'home':
        include('./controller/homeController.php');
        break;
    case 'categoryController':
        include('./controller/categoryController.php');
        break;
    case 'studentController':
        include('./controller/studentController.php');
        break;
    case 'bookController':
        include('./controller/bookController.php');
        break;
    case 'receiptController':
        include('./controller/receiptController.php');
        break;
    case 'homepage':
        include('./controller/homeController.php');
        break;
  
   

    default:
        
        break;
}


























?>












































