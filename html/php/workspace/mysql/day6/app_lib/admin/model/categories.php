<?php
    function get_categories(){
        global $db;
        try {
            //Chuẩn bị câu lệnh truy vấn
            $query = 'SELECT * FROM categories';
            $statement = $db->prepare($query);
            //Thực thi câu lệnh truy vấn
            $statement->execute();
            //Lấy tất cả dữ liệu ra mảng
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Truy vấn thất bại, kiểm tra lại lỗi truy vấn : $error_message </p>";
        }
    }

    function get_category_by_id($category_id){
        global $db;
        try {
            //Chuẩn bị câu lệnh truy vấn
            $query = 'SELECT * FROM categories WHERE category_id=:category_id';
            $statement = $db->prepare($query);
            //Gán tham số cho câu lệnh truy vấn
            $statement->bindValue(':category_id',$category_id);
            //Thực thi câu lệnh truy vấn
            $statement->execute();
            //Lấy một mẫu tin thoả mãn điều kiện truy vấn
            $result = $statement->fetch();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Truy vấn thất bại, kiểm tra lại lỗi truy vấn : $error_message </p>";
        }
    }

    function add_category($category){
        global $db;
        try {
            //Chuẩn bị câu lệnh truy vấn
            $query = "INSERT INTO categories(category_id, category_name, more_info)
                      VALUES(:category_id, :category_name, :more_info)";
            $statement = $db->prepare($query);
            //Gán tham số cho câu lệnh truy vấn
            $statement->bindValue(':category_id',$category['category_id']);
            $statement->bindValue(':category_name',$category['category_name']);
            $statement->bindValue(':more_info',$category['more_info']);
            //Thực thi câu lệnh truy vấn
            $statement->execute();    
            $statement->closeCursor(); //ĐÓNG TRUY VẤN LẠI         
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Truy vấn thất bại, kiểm tra lại lỗi truy vấn : $error_message </p>";
        }
    }

    // Hàm cập nhật category
    function update_category($category){
        global $db;
        try {
            //Chuẩn bị câu lệnh truy vấn
            $query = 'UPDATE categories
                      SET category_name = :category_name,
                          more_info = :more_info
                    WHERE category_id = :category_id';
            $statement = $db->prepare($query);
            //Gán tham số
            $statement->bindValue(':category_id',$category['category_id']);
            $statement->bindValue(':category_name',$category['category_name']);
            $statement->bindValue(':more_info',$category['more_info']);
            //Thực thi câu lệnh truy vấn
            $statement->execute();    
            $statement->closeCursor(); //ĐÓNG TRUY VẤN LẠI         
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Truy vấn thất bại, kiểm tra lại lỗi truy vấn : $error_message </p>";
        }
    }
    //Hàm xoá thể loại
    function delete_category($category_id){
        global $db;
        try {
            //Chuẩn bị câu lệnh truy vấn
            $query = 'DELETE FROM categories
                      WHERE category_id = :category_id';
            $statement = $db->prepare($query);
            //Gán tham số
            $statement->bindValue(':category_id',$category_id);
            //Thực thi câu lệnh truy vấn
            $statement->execute();    
            $statement->closeCursor(); //ĐÓNG TRUY VẤN LẠI         
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Truy vấn thất bại, kiểm tra lại lỗi truy vấn : $error_message </p>";
        }
    }
?>