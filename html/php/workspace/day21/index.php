<?php
    //Khởi động session
    $lifetime = 10*24*60*60;
    session_set_cookie_params($lifetime,'/');
    session_start();
    //Session viết đầu tiên

    include('./account.php');
    $action = filter_input(INPUT_POST,'action');
    if(empty($action)){
        $action = filter_input(INPUT_GET,'action');
        if(empty($action)){
            $action = 'login';
        }
    }
    
   if($action == 'addcard'){
    $id= filter_input(INPUT_POST,'id');

    $_SESSION['mycard'][]=[
                'id' => $id,
                'name' => $list_nation[$id]['name'],
                'quantity' => 1,
                'IP' => $list_nation[$id]['IP'],
        ];
    }

    if($action=='logout'){
        //Xoá session        
        unset($_SESSION['account']);
        //Quay về trang login
        include('./login.php');
    }
    else{

        if(isset($_SESSION['mycard'])){
            $action = 'mycard';
        }else{
             //Điều hướng vào trực tiếp trang chủ nếu tồn tại session
            if(isset($_SESSION['account'])){
                $action='home';
            }
        }
   }
   

    switch ($action) {
        case 'home':
            include('./home.php');
            //echo "chào mừng $username";
            break;
        case 'login':
            include('./login.php');
            break;
        case 'check_login':
            $username = filter_input(INPUT_POST,'username');
            $password = filter_input(INPUT_POST,'password');
            //Chứng thực xem có không
            $check = false;
            foreach ($users as $key => $value) {
                if($username==$value['username'] && $password == $value['password']){
                    $check = true;
                    break;      
                }
            }
            //Nếu tài khoản nhập vào đúng
            if($check){                
                include('./home.php');
                
                //Tạo và Lưu session
                $_SESSION['account'] = [
                        'username'=>$username,
                        'password'=>$password
                ];
            }
            break;
        case 'mycard':
                if(isset($_SESSION['mycard'])){
                    foreach ($_SESSION['mycard'] as $key => $value) {
                        echo "<br> ".$value['name'];
                    }
                }
            break;
        default:
            # code...
            break;
    }