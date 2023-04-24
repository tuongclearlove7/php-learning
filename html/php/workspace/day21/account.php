<?php


$list_nation = [
    ['id'=>1,'name'=>'Việt nam','IP'=>'098765432','image'=>'vietnam.png'],
    ['id'=>2,'name'=>'Nhật bản','IP'=>'098765432','image'=>'japan.jpg'],
    ['id'=>3,'name'=>'Hàn Quốc','IP'=>'098765432','image'=>'korea.png'],
    ['id'=>4,'name'=>'Hoa Kỳ','IP'=>'098765432','image'=>'my.png'],
    ['id'=>5,'name'=>'Nga','IP'=>'098765432','image'=>'nga.jpg'],
    ['id'=>6,'name'=>'Trung Quốc','IP'=>'098765432','image'=>'china.png'],
    ['id'=>7,'name'=>'Bồ Đào Nha','IP'=>'098765432','image'=>'bo_dao_nha.png'],
    ['id'=>8,'name'=>'Bồ Đào Nha','IP'=>'098765432','image'=>'bo_dao_nha.png'],

];

$users = [
    ['username'=>'tuong','password'=>'123'],
    ['username'=>'thao','password'=>'456',],
    ['username'=>'mai','password'=>'789',],

];


function check_login($users, $username, $password, $check){
     //Chứng thực xem có không
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










































































































