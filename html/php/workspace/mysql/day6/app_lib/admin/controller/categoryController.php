<?php 


include('./model/database.php');
include('./model/categories.php');


//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_categories';
    }
}
//Thực hiện điều hướng bằng switch case
switch ($action) {
    case 'list_categories':
        $categories = get_categories();
        include('./view/category/list_categories.php');
        break;
    case 'showcategory':
        $category_id = filter_input(INPUT_GET,'category_id');
        $category = get_category_by_id( $category_id);
        include('./view/category/category.php');
        break;  
    case 'add_category_form':
        include('./view/category/add_category_form.php');
        break;  
    case 'save_category':
        //Lấy thông tin thể loại từ form nhập liệu của người dùng
        $category['category_id'] = filter_input(INPUT_POST,'category_id');
        $category['category_name'] = filter_input(INPUT_POST,'category_name');
        $category['more_info'] = filter_input(INPUT_POST,'more_info');
        //Gọi hàm add_category($category) để thêm thể loại vào bảng csdl
        add_category($category);

        //Lấy dữ liệu từ bảng categories và in ra màn hình
        $categories = get_categories();
        include('./view/category/list_categories.php');
        break;
    case 'edit':
        $category_id = filter_input(INPUT_GET,'category_id');
        $category = get_category_by_id($category_id);
        include('./view/category/edit_category.php');
        break;
    case 'update_category':
        //Lấy tất cả dữ liệu từ form edit category
        $category['category_id'] = filter_input(INPUT_POST,'category_id');
        $category['category_name'] = filter_input(INPUT_POST,'category_name');
        $category['more_info'] = filter_input(INPUT_POST,'more_info');
        //Gọi hàm cập nhật category
        update_category($category);
        //Hiển thị danh sách categories mới cập nhật ra màn hình
        $categories = get_categories();
        include('./view/category/list_categories.php');
        break;
    case 'delete':
        //Lấy category_id từ giao diện nút delete
        $category_id = filter_input(INPUT_GET,'category_id');
        //Gọi hàm delete_category
        delete_category($category_id);
        //Hiển thị danh sách categories mới cập nhật ra màn hình
        $categories = get_categories();
        include('./view/category/list_categories.php');
        break;
    default:
        # code...
        break;
}




?>

