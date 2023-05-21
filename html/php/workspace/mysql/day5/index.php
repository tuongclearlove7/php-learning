<?php
include('./connect_mysql.php');
include('./data_model.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_categories';
    }
}
//Thực hiện điều hướng 
switch ($action) {
    case 'list_categories':
        $data = getDataModel();
        include('./view_list_categories.php');
        break;
    case 'show_category':
        $category_id = filter_input(INPUT_GET,'category_id');
        $category = get_data_by_id( $category_id);
        include('./view_category.php');
        break;  
    case 'add_data_form':
        include('./form_add.php');
        break;  
    case 'add_data':
        //Lấy thông tin thể loại từ form nhập liệu của người dùng
        $category['category_id'] = filter_input(INPUT_POST,'category_id');
        $category['category_name'] = filter_input(INPUT_POST,'category_name');
        $category['more_info'] = filter_input(INPUT_POST,'more_info');
        //Gọi hàm add_data($category) để thêm thể loại vào bảng csdl
        add_data($category);

        //Lấy dữ liệu từ bảng  và in ra màn hình
        $data = getDataModel();
        include('./view_list_categories.php');
        break;
    case 'edit_data':
        $category_id = filter_input(INPUT_GET,'category_id');
        $category = get_data_by_id($category_id);
        //print_r($category);
        include('./edit.php');
        break;  
    case 'update_data':
        //lấy dữ liệu từ form
        $category['category_id'] = filter_input(INPUT_POST,'category_id');
        $category['category_name'] = filter_input(INPUT_POST,'category_name');
        $category['more_info'] = filter_input(INPUT_POST,'more_info');
        // call fuction to update 
        update_data($category);
        //show new data
        $data = getDataModel();
        include('./view_list_categories.php');
    break;  
    case 'detele':
        $category_id = filter_input(INPUT_GET,'category_id');
        delete_data($category_id);
        $data = getDataModel();
        include('./view_list_categories.php');
    break;  
    default:
        # code...
        break;
}




?>