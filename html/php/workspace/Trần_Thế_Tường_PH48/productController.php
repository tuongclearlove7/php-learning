<?php 
 //Khởi động session
$lifetime = 10*24*60*60;
session_set_cookie_params($lifetime,'/');
session_start();
require('./model/database.php');
require('./model/product.php');

$action = filter_input(INPUT_POST, 'action');
if(empty($action)){
    $action = filter_input(INPUT_GET, 'action');
    if(empty($action)){
        //render ra trang home
        $action = 'home';
    }
}
// tạo biến list để lưu dữ liệu
$list = [];
$product_max_price = "";
//tạo danh sách các đối tượng sinh viên
$list_obj_product = productDB::get_all_product();
switch ($action) {
    case 'home':
        //gọi view render ra home
        include('./view/home_oop.php'); 
          
        break;
    case 'add_products':
        //lấy tất cả dữ liệu trong form
        $product = [
            'name'=> filter_input(INPUT_POST,'name'),
            'description'=> filter_input(INPUT_POST,'description'),
            'price'=> filter_input(INPUT_POST,'price'),

        ];
        print_r($product);
        $_SESSION['products'][] = $product;
        $products = $_SESSION['products'];
        // callback gọi lại hàm
        $list_obj_product = productDB::get_all_product();
        include('./view/home_oop.php');   

    break;
    case 'edit':
        $key = filter_input(INPUT_GET,'key');
        //Tìm phần tử trong session tương ứng với key (index)
        $product = $_SESSION['products'][$key];
        include('view/edit_product.php');
        break;
    case 'update_product':
        $key = filter_input(INPUT_POST,'key');
        $product = [
            'name'=> filter_input(INPUT_POST,'name'),
            'description'=> filter_input(INPUT_POST,'description'),
            'price'=> filter_input(INPUT_POST,'price'),
    

        ];
        $_SESSION['products'][$key] =  $product;

        $products = $_SESSION['products'];
        $list_obj_product = productDB::get_all_product();
        include('./view/home_oop.php');    
        break;
    case 'delete':
        $key = filter_input(INPUT_GET,'key');
        unset($_SESSION['products'][$key]);
        $_SESSION['products'] = array_values($_SESSION['products']);
        $products = $_SESSION['products'];
        $list_obj_product = productDB::get_all_product();
        include('./view/home_oop.php');    
        break;
    case 'search_name':
        $search_value = filter_input(INPUT_POST,'search_value');
        echo $search_value;
        $_SESSION['products'] = array_values($_SESSION['products']);
        $products = $_SESSION['products'];
        $list_obj_product = productDB::get_all_product();
        
        foreach ($list_obj_product as $key => $value) {
            if(strpos($value -> getName(),$search_value)!==false){
                $list[] = $value;
                
            }
        } 
        $list_obj_product = $list;

    case 'find_max_price':
        $list_obj_product = productDB::get_all_product();
        $max_price = $list_obj_product[0]->getPrice();
        foreach ($list_obj_product as $key => $value){
            if ($value->getPrice() > $max_price) {
                $max_price = $value->getName() ." ".$value->getPrice();
            }
        }
        $product_max_price =  "Sản phẩm có giá cao nhất là : " . $max_price;

        include('./view/home_oop.php'); 
        break;
    default:
        break;
}



































































































?>