<?php
    //Định nghĩa hàm kiểm tra tài khoản có hay không
    function check_login($users, $username,$password){
        $check = false;
        foreach ($users as $key => $value) {
            if($username==$value['username'] && $password == $value['password']){
                $check = true;
                break;      
            }
        }
        return $check;
    }
?>