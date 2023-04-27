<?php 
 //Khởi động session
$lifetime = 10*24*60*60;
session_set_cookie_params($lifetime,'/');
session_start();
require('./model/database.php');
require('./model/userDB.php');

//lấy hành động từ phía ng dùng (lấy request)
$action = filter_input(INPUT_POST, 'action');
if(empty($action)){
    $action = filter_input(INPUT_GET, 'action');
    if(empty($action)){
        $action = 'home';//render ra trang home
    }
}

if(!isset($_SESSION['user'])){
    $action='check_login';
} 
switch ($action) {
    case 'home':
        //gọi view render ra home
        $lists = $list_users;

        require('./view/list_user.php'); 
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
            include('./view/list_user.php');      
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
    case 'search_name':
        $seach_value = filter_input(INPUT_POST,'search_value');
        $lists = [];
        foreach ($list_users as $key => $value) {
            if(strpos($value['firstname'],$seach_value)!==false){
                $lists[] = $value;
            }
        }
        require('./view/list_user.php'); 
        break;
    case 'edit':
        $key = filter_input(INPUT_GET,'key');
        //Tìm phần tử trong session tương ứng với ID
        $_SESSION['list_users'] = $list_users;
        $user = $_SESSION['list_users'][$key];
    
        include('./view/edit_user.php');
        break;
    case 'update_user':
        $key = filter_input(INPUT_POST,'key');
        $user = ['firstname'=>filter_input(INPUT_POST,'firstname'),
                    'lastname'=>filter_input(INPUT_POST,'lastname'),
                    'email'=>filter_input(INPUT_POST,'email'),
            
                    ];
        $_SESSION['list_users'][$key] =  $user;

        $list_users = $_SESSION['list_users'];
        $lists = $list_users;
        include('./view/list_user.php');    
        break;
    case 'delete':
        $key = filter_input(INPUT_GET,'key');
        unset($_SESSION['list_users'][$key]);
        $_SESSION['students'] = array_values($_SESSION['list_users']);
        $list_users = $_SESSION['list_users'];
        $lists = $list_users;
        include('./view/list_user.php');    
        break;
    default:
        break;
}



































































































?>


















