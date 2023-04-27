<?php 
 //Khởi động session
$lifetime = 10*24*60*60;
session_set_cookie_params($lifetime,'/');
session_start();
require('./model/database.php');
require('./model/userDB.php');
require('./model/book.php');
// Tạo biến để lưu kết quả tìm kiếm
//lấy hành động từ phía ng dùng (lấy request)
$action = filter_input(INPUT_POST, 'action');
if(empty($action)){
    $action = filter_input(INPUT_GET, 'action');
    if(empty($action)){
        $action = 'home';//render ra trang home
    }
}

  //Nếu không tồn tại session tức người dùng chưa đăng nhập
if(!isset($_SESSION['user'])){
    $action='check_login';
} 

//tạo danh sách các đối tượng sinh viên
$b = new bookDB();
$list_obj_book = bookDB::get_all_book();
switch ($action) {
    case 'home':
        //gọi view render ra home
        include('./view/home_oop.php'); 
          
        break;
    case 'check_login':
        //kiem tra login
        $username = filter_input(INPUT_POST,'username');
        $password = filter_input(INPUT_POST,'password');           
        //Nếu tài khoản nhập vào đúng
        if(check_login($users,$username,$password)){     
             //Tạo và Lưu session
            
             $_SESSION['user'] = [
                'username'=>$username,
                'password'=>$password
            ];           
            include('./view/home_oop.php');      
         }
         else{
            include('./view/login.php');
         }
    break;
    case 'logout':
        unset($_SESSION['user']);   
        

        //Quay về trang login
        include('./view/login.php');
    break;
    case 'add_book':
        
        include('view/add_book.php'); 
    break;
    case 'save_book':
        //lấy tất cả dữ liệu trong form
        $book = [
            'book_id'=> filter_input(INPUT_POST,'book_id'),
            'name'=> filter_input(INPUT_POST,'name'),
            'author'=> filter_input(INPUT_POST,'author'),
            'publishyear'=> filter_input(INPUT_POST,'publishyear'),
            'production'=> filter_input(INPUT_POST,'production'),

        ];

        $_SESSION['books'][] = $book;
        //hiển thị lại danh sách
        //print_r($_SESSION['books']);
        $books = $_SESSION['books'];
        // callback gọi lại hàm
        $list_obj_book = bookDB::get_all_book();
        include('./view/home_oop.php');   

    break;
    case 'edit':
        $key = filter_input(INPUT_GET,'key');
        //Tìm phần tử trong session tương ứng với ID
        $book = $_SESSION['books'][$key];
        include('view/edit_book.php');
        break;
    case 'update_book':
        $key = filter_input(INPUT_POST,'key');
        $book = ['book_id'=>filter_input(INPUT_POST,'book_id'),
                    'name'=>filter_input(INPUT_POST,'name'),
                    'author'=>filter_input(INPUT_POST,'author'),
                    'publishyear'=>filter_input(INPUT_POST,'publishyear'),
                    'production'=>filter_input(INPUT_POST,'production'),
                    ];
        $_SESSION['books'][$key] =  $book;

        $books = $_SESSION['books'];
        $list_obj_book = bookDB::get_all_book();
        include('./view/home_oop.php');    
        break;
    case 'delete':
        $key = filter_input(INPUT_GET,'key');
        unset($_SESSION['books'][$key]);
        $_SESSION['books'] = array_values($_SESSION['books']);
        $books = $_SESSION['books'];
        $list_obj_book = bookDB::get_all_book();
        include('./view/home_oop.php');    
        break;
    case 'search_book':
        $search_value = filter_input(INPUT_GET, 'search_value');
        echo $search_value;
        $_SESSION['books'] = array_values($_SESSION['books']);
        $books = $_SESSION['books'];
        $list_obj_book = bookDB::get_all_book();

        foreach ($list_obj_book as $key => $value) {
            if(strpos($value -> getName(),$search_value)!==false){
                $list_obj_book = $value;
            }
        } 
        

        include('./view/home_oop.php'); 
        break;
    default:
        break;
}



































































































?>