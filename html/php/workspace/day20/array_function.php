<?php

$list_names = ['tuong']; 
$res = [];
// insert to list
array_push($list_names,'thao');
$list_names[] = "hello world!";


$list_student = [
    ['id'=>1,'name'=>'Việt nam','IP'=>'098765432','avatar'=>'vietnam.png'],
    ['id'=>2,'name'=>'Nhật bản','IP'=>'098765432','avatar'=>'japan.jpg'],
    ['id'=>3,'name'=>'Hàn Quốc','IP'=>'098765432','avatar'=>'korea.png'],
    ['id'=>4,'name'=>'Hoa Kỳ','IP'=>'098765432','avatar'=>'my.png'],
    ['id'=>5,'name'=>'Nga','IP'=>'098765432','avatar'=>'nga.jpg'],
    ['id'=>6,'name'=>'Trung Quốc','IP'=>'098765432','avatar'=>'china.png'],
    ['id'=>7,'name'=>'Bồ Đào Nha','IP'=>'098765432','avatar'=>'vietnam.png'],
];

$action = filter_input(INPUT_POST,'action'); //Tương đương $_POST['action]
if(empty($action)){
    $action = filter_input(INPUT_GET,'action'); 
    if(empty($action)){
        $action = 'show_nation';
    }
}
switch ($action) {
    case 'show_nation':
        $lists = $list_student;
        include('./UI.php');
        break;
    case 'search_name':
        $seach_value=filter_input(INPUT_POST,'search_value');
        $lists = [];
        foreach ($list_student as $key => $value) {
            if(strpos($value['name'],$seach_value)!==false){
                $lists[] = $value;
            }
        }
        include('./UI.php');
        break;
    default:
        # code...
        break;
}




























































































































































































































































































































