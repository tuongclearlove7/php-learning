
<?php
include('./model/database.php');
include('./model/receipts.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_receipts';
    }
}
//Thực hiện điều hướng 
switch ($action) {
    case 'list_receipts':
        $data = receiptDB::getDataModel();
        include('./view/receipt/list_receipts.php');
        break;
    case 'show_data':
        $card_id = filter_input(INPUT_GET,'card_id');
        $receipt = receiptDB::get_data_by_id( $card_id);
        include('./view/receipt/receipt.php');
        break;  
    case 'add_data':
        include('./view/category/add_data.php');
        break;  
    case 'save_data':
        //Lấy thông tin từ form nhập liệu của người dùng
        $category['category_id'] = filter_input(INPUT_POST,'category_id');
        $category['category_name'] = filter_input(INPUT_POST,'category_name');
        $category['more_info'] = filter_input(INPUT_POST,'more_info');
        //Gọi hàm  để thêm thể loại vào bảng csdl
        CategoryDB::add_data($category);

        //Lấy dữ liệu từ bảng và in ra màn hình
        $data = CategoryDB::getDataModel();
        include('./view/category/list_categories.php');
        break;
    case 'edit':
        $category_id = filter_input(INPUT_GET,'category_id');
        $category =  CategoryDB::get_data_by_id( $category_id);
        include('./view/category/edit_data.php');
        break;
    case 'update_data':
        //Lấy tất cả dữ liệu từ form edit
        $category['category_id'] = filter_input(INPUT_POST,'category_id');
        $category['category_name'] = filter_input(INPUT_POST,'category_name');
        $category['more_info'] = filter_input(INPUT_POST,'more_info');
        //Gọi hàm cập nhật 
        CategoryDB::update_data($category);
        $data = CategoryDB::getDataModel();
        include('./view/category/list_categories.php');
        break;
    case 'delete':
        $category_id = filter_input(INPUT_GET,'category_id');
        //Gọi hàm delete
        CategoryDB::delete_data($category_id);
        $data = CategoryDB::getDataModel();
        include('./view/category/list_categories.php');
        break;
   
    default:
        # code...
        break;
}




?>



