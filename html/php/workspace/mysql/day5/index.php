<?php
include('connect_mysql.php');
include('data_model.php');

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
        include('view_list_data.php');
        break;
    case 'show_data':
        $category_id = filter_input(INPUT_GET,'category_id');
        $category = get_data_by_id( $category_id);
        include('view_category.php');
        break;  
    case 'add_data':
        include('add_data.php');
        break;  
    case 'save_data':
        //Lấy thông tin từ form nhập liệu của người dùng
        $category['category_id'] = filter_input(INPUT_POST,'category_id');
        $category['category_name'] = filter_input(INPUT_POST,'category_name');
        $category['more_info'] = filter_input(INPUT_POST,'more_info');
        //Gọi hàm  để thêm thể loại vào bảng csdl
        add_data($category);

        //Lấy dữ liệu từ bảng và in ra màn hình
        $data = getDataModel();
        include('view_list_data.php');
        break;
    case 'edit':
        $category_id = filter_input(INPUT_GET,'category_id');
        $category = get_data_by_id($category_id);
        include('edit_data.php');
        break;
    case 'update_data':
        //Lấy tất cả dữ liệu từ form edit 
        $category['category_id'] = filter_input(INPUT_POST,'category_id');
        $category['category_name'] = filter_input(INPUT_POST,'category_name');
        $category['more_info'] = filter_input(INPUT_POST,'more_info');
        //Gọi hàm cập nhật 
        update_data($category);
        $data = getDataModel();
        include('view_list_data.php');
        break;
    case 'delete':
        $category_id = filter_input(INPUT_GET,'category_id');
        //Gọi hàm delete
        delete_data($category_id);
        $data = getDataModel();
        include('view_list_data.php');
        break;
    default:
        # code...
        break;
}




?>