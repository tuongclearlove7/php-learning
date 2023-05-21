<?php
include('./model/database.php');
include('./model/categories.php');

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
    case 'homepage':
        include('./view/home/home.php');
        break;
    case 'add_data':
        include('./view/category/add_data.php');
        break;
    case 'show_data':
        $category_id = filter_input(INPUT_GET,'category_id');
        $category = get_data_by_id( $category_id);
        include('./view/category/category.php');
        break;  
  

    default:
        
        break;
}


























?>












































