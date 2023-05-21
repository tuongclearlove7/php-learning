<?php 
 //Khởi động session
$lifetime = 10*24*60*60;
session_set_cookie_params($lifetime,'/');
session_start();
require('./model/database.php');
require('./model/userDB.php');
require('./model/studentDB.php');
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
$ls = new StudentDB();
$list_obj_student = StudentDB::get_all_student();
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
    case 'add_student':
        
        include('view/add_student.php'); 
    break;
    case 'save_student':
        //lấy tất cả dữ liệu trong form
        $student = [
            'id'=> filter_input(INPUT_POST,'id'),
            'name'=> filter_input(INPUT_POST,'name'),
            'gioitinh'=> filter_input(INPUT_POST,'gioitinh'),
            'email'=> filter_input(INPUT_POST,'email'),
            'image'=> filter_input(INPUT_POST,'image'),
            'address'=> filter_input(INPUT_POST,'address'),

        ];

        $_SESSION['students'][] = $student;
        //hiển thị lại danh sách
        //print_r($_SESSION['students']);
        $students = $_SESSION['students'];
        // callback gọi lại hàm
        $list_obj_student = StudentDB::get_all_student();
        include('./view/home_oop.php');   

    break;
    case 'edit':
        $key = filter_input(INPUT_GET,'key');
        //Tìm phần tử trong session tương ứng với ID
        $student = $_SESSION['students'][$key];
        include('view/edit_student.php');
        break;
    case 'update_student':
        $key = filter_input(INPUT_POST,'key');
        $student = ['id'=>filter_input(INPUT_POST,'id'),
                    'name'=>filter_input(INPUT_POST,'name'),
                    'gioitinh'=>filter_input(INPUT_POST,'gioitinh'),
                    'email'=>filter_input(INPUT_POST,'email'),
                    'image'=>filter_input(INPUT_POST,'image'),
                    'address'=>filter_input(INPUT_POST,'address')
                    ];
        $_SESSION['students'][$key] =  $student;

        $students = $_SESSION['students'];
        $list_obj_student = StudentDB::get_all_student();
        include('./view/home_oop.php');    
        break;
    case 'delete':
        $key = filter_input(INPUT_GET,'key');
        unset($_SESSION['students'][$key]);
        $_SESSION['students'] = array_values($_SESSION['students']);
        $students = $_SESSION['students'];
        $list_obj_student = StudentDB::get_all_student();
        include('./view/home_oop.php');    
        break;
    default:
        break;
}



































































































?>