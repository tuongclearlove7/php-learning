<?php
    //Khởi động session
    $lifetime = 10*24*60*60;
    session_set_cookie_params($lifetime,'/');
    session_start();
    //Session viết đầu tiên
    include('account.php');
    $action = filter_input(INPUT_POST,'action');
    if(empty($action)){
        $action = filter_input(INPUT_GET,'action');
        if(empty($action)){
            $action = 'homepage';
        }
    }
    //Nếu không tồn tại session tức người dùng chưa đăng nhập
    if(!isset($_SESSION['account'])){
        $action='checklogin';
    } 
    switch ($action) {
        case 'homepage':
            include('homepage.php');
            break;        
        case 'checklogin':
            $username = filter_input(INPUT_POST,'username');
            $password = filter_input(INPUT_POST,'password');           
            //Nếu tài khoản nhập vào đúng
            if(check_login($users,$username,$password)){     
                 //Tạo và Lưu session
                 $_SESSION['account'] = [
                    'username'=>$username,
                    'password'=>$password
                ];           
                include('homepage.php');      
             }
             else{
                include('login.php');
             }
            break;   
        case 'logout':
            unset($_SESSION['account']);            
            //Quay về trang login
            include('login.php');
            break;
        case 'addcart':         
            
            $id = filter_input(INPUT_POST,'id');//Thông tin dòng 12 ẩn đi trên form
            //lấy thông tin username
            $username = $_SESSION['account']['username'];

            if(isset($_SESSION['mycart'][$username])&&(checksession($_SESSION['mycart'][$username],$id))){
                update_cart($_SESSION['mycart'][$username],$id);
               
            }
            else{
                $_SESSION['mycart'][$username][] = [ 
                'id'=> $id,
                'name'=>$list_product[$id]['name'],
                'quantity'=>1, 
                'price'=>$list_product[$id]['price']];
            }                    
            include('homepage.php');
            break;
        case 'mycart':
            $username = $_SESSION['account']['username'];
            if(isset($_SESSION['mycart'][$username])){
                include('mycart.php');
            }
            else{
                echo "Không có mặt hàng nào";
              //  include('mycart.php');
            }
            break; 
        case 'delete':
            $username = $_SESSION['account']['username'];
            $key = filter_input(INPUT_GET,'key');
            unset($_SESSION['mycart'][$username][$key]);           
            $_SESSION['mycart'][$username]=array_values($_SESSION['mycart'][$username]);
            include('mycart.php');
            break;
        default:
            # code...
            break;
    }
   