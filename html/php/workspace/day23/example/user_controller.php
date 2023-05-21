<?php
    //Khởi động session
    $lifetime = 10*24*60*60;
    session_set_cookie_params($lifetime,'/');
    session_start();
    include('./model/database.php');
    include('./model/user_db.php');
    include('./model/student_db.php');

    //Lấy hành động (yêu cầu) từ phía người dùng (lấy request)
    $action = filter_input(INPUT_POST,'action');
    if(empty($action)){
        $action = filter_input(INPUT_GET,'action');
        if(empty($action)){
            $action = 'homepage';//Thấy trang chủ
        }
    }
  //Nếu không tồn tại session tức người dùng chưa đăng nhập
  if(!isset($_SESSION['user'])){
        $action='checklogin';
  } 
  //Tạo danh sách các đối tượng sinh viên
  $ls = new StudentDB($students);
  $list_obj_student = $ls->get_all_student();


    switch ($action) {
        case 'homepage':
            //Gọi view homepage           
            include('view/homepage_oop.php');
            break;
        case 'checklogin':
            $username = filter_input(INPUT_POST,'username');
            $password = filter_input(INPUT_POST,'password');           
            //Nếu tài khoản nhập vào đúng
            if(check_login($users,$username,$password)){     
                 //Tạo và Lưu session
                 $_SESSION['user'] = [
                    'username'=>$username,
                    'password'=>$password
                ];           
                include('./view/homepage_oop.php');      
             }
             else{
                include('./view/login.php');
             }
            break; 
        case 'logout':
            unset($_SESSION['user']);
            include('./view/login.php');
            break;        
        default:
            # code...
            break;
    }