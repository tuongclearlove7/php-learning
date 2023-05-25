
<?php
include('./model/database.php');
include('./model/students.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_students';
    }
}
//Thực hiện điều hướng 
switch ($action) {
    case 'list_students':
        $data = studentDB::getDataModel();
        include('./view/student/list_students.php');
        break;
    case 'show_data':
        $card_id = filter_input(INPUT_GET,'card_id');
        $student = studentDB::get_data_by_id( $card_id);
        include('./view/student/student.php');
        break;  
    case 'add_data':
        include('./view/student/add_data.php');
        break;  
    case 'save_data':
        //Lấy thông tin từ form nhập liệu của người dùng
        $student['card_id'] = filter_input(INPUT_POST,'card_id');
        $student['name_student'] = filter_input(INPUT_POST,'name_student');
        $student['address'] = filter_input(INPUT_POST,'address');
        $student['tel'] = filter_input(INPUT_POST,'tel');
        //Gọi hàm  để thêm thể loại vào bảng csdl
        studentDB::add_data($student);

        //Lấy dữ liệu từ bảng và in ra màn hình
        $data = studentDB::getDataModel();
        include('./view/student/list_students.php');
        break;
    case 'edit':
        $card_id = filter_input(INPUT_GET,'card_id');
        $student =  studentDB::get_data_by_id( $card_id);
        include('./view/student/edit_data.php');
        break;
    case 'update_data':
        //Lấy tất cả dữ liệu từ form edit
        $student['card_id'] = filter_input(INPUT_POST,'card_id');
        $student['name_student'] = filter_input(INPUT_POST,'name_student');
        $student['address'] = filter_input(INPUT_POST,'address');
        $student['tel'] = filter_input(INPUT_POST,'tel');
        //Gọi hàm cập nhật 
        studentDB::update_data($student);
        $data = studentDB::getDataModel();
        include('./view/student/list_students.php');
        break;
    case 'delete':
        $card_id = filter_input(INPUT_GET,'card_id');
        //Gọi hàm delete
        studentDB::delete_data($card_id);
        $data = studentDB::getDataModel();
        include('./view/student/list_students.php');
        break;
   
    default:
        # code...
        break;
}




?>



