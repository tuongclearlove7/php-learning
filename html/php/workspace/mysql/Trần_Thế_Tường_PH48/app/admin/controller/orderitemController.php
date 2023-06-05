
<?php
include('./model/database.php');
include('./model/orderitems.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_orderitems';
    }
}
//Thực hiện điều hướng 
switch ($action) {
    case 'list_orderitems':
        $data = orderitemDB::getDataModel();
        include('./view/orderitem/list_order_items.php');
        break;
   
    default:
        # code...
        break;
}




?>



