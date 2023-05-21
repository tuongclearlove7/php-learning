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
    
    default:
        
        break;
}


























?>












































