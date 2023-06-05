
<?php
include('./model/database.php');
include('./model/products.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_products';
    }
}
//Thực hiện điều hướng 
switch ($action) {
    case 'list_products':
        $data = productDB::getDataModel();
        include('./view/product/list_products.php');
        break;
   
   
    default:
        # code...
        break;
}




?>



