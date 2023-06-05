
<?php
include('./model/database.php');
include('./model/user.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'login';
    }
}

if(!isset($_SESSION['is_valid_admin'])){

    $action = 'login';
}

//Thực hiện điều hướng 
switch ($action) {
    case 'login':
        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'password');
        if(userDB::is_valid_admin_login($email, $password)){

            $_SESSION['is_valid_admin'] = true;
            header('location: .');
        }else{
            require("./view/user/login.php");
        }
        break;
    case 'logout':
        unset($_SESSION['is_valid_admin']);
        require("./view/user/login.php");
        break; 
    default:
        break;
}

























?>



