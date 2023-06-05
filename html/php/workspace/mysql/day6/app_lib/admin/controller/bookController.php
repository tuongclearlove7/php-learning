
<?php
include('./model/database.php');
include('./model/books.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_books';
    }
}
//Thực hiện điều hướng 
switch ($action) {
    case 'list_books':
        $data = bookDB::getDataModel();
        include('./view/book/list_books.php');
        break;
    case 'show_data':
        $book_id = filter_input(INPUT_GET,'book_id');
        $book = bookDB::get_data_by_id($book_id);
        include('./view/book/book.php');
        break;  
    case 'add_data':
       // $data = categoryDB::getDataModel();
        include('./view/book/add_data.php');
        break;  
    case 'save_data':
        //Lấy thông tin từ form nhập liệu của người dùng
        $book['book_id'] = filter_input(INPUT_POST,'book_id');
        $book['name_book'] = filter_input(INPUT_POST,'name_book');
        $book['publisher'] = filter_input(INPUT_POST,'publisher');
        $book['author'] = filter_input(INPUT_POST,'author');
        $book['category_id'] = filter_input(INPUT_POST,'category_id');
        $book['num_of_page'] = filter_input(INPUT_POST,'num_of_page');
        $book['max_date'] = filter_input(INPUT_POST,'max_date');
        $book['num'] = filter_input(INPUT_POST,'num');
        $book['summary'] = filter_input(INPUT_POST,'summary');
        
        //xử lý upload image  
        $tmp_name = $_FILES['picture']['tmp_name'];
        $path_name = getcwd()."/public/image/".$_FILES['picture']['name'];
        $success = move_uploaded_file($tmp_name, $path_name);
        if(!$success)
            echo "uploading image failed";
        $book['picture'] = $_FILES['picture']['name'];

        //Gọi hàm  để thêm thể loại vào bảng csdl
        bookDB::add_data($book);
        //Lấy dữ liệu từ bảng và in ra màn hình
        $data = bookDB::getDataModel();
        include('./view/book/list_books.php');
        break;
    case 'edit':
        $book_id = filter_input(INPUT_GET,'book_id');
        $book =  bookDB::get_data_by_id($book_id);
        include('./view/book/edit_data.php');
        break;
    case 'update_data':
        //Lấy tất cả dữ liệu từ form edit
        $book['book_id'] = filter_input(INPUT_POST,'book_id');
        $book['name_book'] = filter_input(INPUT_POST,'name_book');
        $book['publisher'] = filter_input(INPUT_POST,'publisher');
        $book['author'] = filter_input(INPUT_POST,'author');
        $book['category_id'] = filter_input(INPUT_POST,'category_id');
        $book['num_of_page'] = filter_input(INPUT_POST,'num_of_page');
        $book['max_date'] = filter_input(INPUT_POST,'max_date');
        $book['num'] = filter_input(INPUT_POST,'num');
        $book['summary'] = filter_input(INPUT_POST,'summary');
        
        //xử lý upload image 
        if (!empty($_FILES['picture']['tmp_name']) 
            && is_uploaded_file($_FILES['picture']['tmp_name'])) {
            // Xử lý khi có tệp tin được tải lên
            $tmp_name = $_FILES['picture']['tmp_name'];
            $path_name = getcwd()."/public/image/".$_FILES['picture']['name'];
            $success = move_uploaded_file($tmp_name, $path_name);
            if (!$success) {
                echo "Upload ảnh thất bại";
            }
            $book['picture'] = $_FILES['picture']['name'];
        } else {
            // Xử lý khi không có tệp tin được tải lên
            $book['picture'] = filter_input(INPUT_POST, 'old_picture');
        }
        //Gọi hàm cập nhật 
        bookDB::update_data($book);
        $data = bookDB::getDataModel();
        include('./view/book/list_books.php');
        break;
    case 'delete':
        $book_id = filter_input(INPUT_GET,'book_id');
        //Gọi hàm delete
        bookDB::delete_data($book_id);
        $data = bookDB::getDataModel();
        include('./view/book/list_books.php');
        break;
   
    default:
        # code...
        break;
}




?>



