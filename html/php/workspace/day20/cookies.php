
<?php

$users = [
    ['username'=>'tuong','password'=>'123'],
    ['username'=>'thao','password'=>'456',],
    ['username'=>'mai','password'=>'789',],

];

$action = filter_input(INPUT_POST,'action'); 
if(empty($action)){
    $action = filter_input(INPUT_GET,'action'); 
    if(empty($action)){
        $action = 'login';
    }
}

switch ($action) {
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
        if($check){
            $remember = filter_input(INPUT_POST,'remember');
            if(!empty($remember)){
                $name = 'username';
                $value=$username;
                setcookie($name,$value,time()+5*60*60,'/');

                $name = 'password';
                $value=$password;
                setcookie($name,$value,time()+5*60*60,'/');
            }

            //echo "Chào mừng bạn đã đăng nhập thành công";
            include('./login_success.php');
        }
        else{
            include('./login.php');
        }
        break;
    default:
        # code...
        break;
}





































