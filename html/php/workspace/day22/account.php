<?php
     $list_product = [
        ['id'=>0,'name'=>'iPhone 14 Promax', 'price'=>27900000,'image'=>'iphone.jpg'],
        ['id'=>1,'name'=>'iPhone 11 Promax', 'price'=>20900000,'image'=>'iphone.jpg'],
        ['id'=>2,'name'=>'Oppo 11 Promax', 'price'=>17900000,'image'=>'iphone.jpg'],
        ['id'=>3,'name'=>'Red 14 Promax', 'price'=>27900000,'image'=>'iphone.jpg'],
        ['id'=>4,'name'=>'red 2 Promax', 'price'=>7900000,'image'=>'iphone.jpg'],
        ['id'=>5,'name'=>'sassung1 Promax', 'price'=>13900000,'image'=>'iphone.jpg'],
        ['id'=>6,'name'=>'sassung2 Promax', 'price'=>12900000,'image'=>'iphone.jpg'],
        ['id'=>7,'name'=>'sassung3 Promax', 'price'=>11900000,'image'=>'iphone.jpg']
    ];


$users = [
['username'=>'admin','password'=>'12345'],
['username'=>'tuong','password'=>'12345'],
['username'=>'thao','password'=>'12345'],
['username'=>'mai','password'=>'12345']
];

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
    //Kiểm tra id có trong session không
    function checksession($session, $id){
        foreach ($session as $key => $value) {
            if($value['id']==$id){
                return true;
            }
        }
        return false;
    }
    //Hàm cập nhật giỏ hàng
    function update_cart(&$session, $id){
        foreach ($session as $key => $value) {
            if($value['id']==$id){
                $session[$key]['quantity'] +=1;
            }
        }
    }
    //Hàm tính tổng tiền giỏ hàng
    function total_cart($session){
        $sum=0;
        foreach ($session as $key => $value) {
            $sum += $value['quantity']*$value['price'];
        }
        return $sum;
    }
?>