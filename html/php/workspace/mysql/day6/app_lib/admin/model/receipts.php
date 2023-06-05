<?php

    class receiptDB{

        public static function  getDataModel(){
            $db = Database::getDB();
            try {
                //thực hiện câu lệnh truy vấn
                $query = 'select * from receipts';
                $statement = $db->prepare($query);
                //Thực thi câu lệnh truy vấn
                $statement->execute();
                //Lấy tất cả dữ liệu ra mảng
                $result = $statement->fetchAll();
                $statement->closeCursor();
                return $result;
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        
            }
        }

        public static function get_data_by_id($card_id){
            $db = Database::getDB();
            try {
                $query = 'select * from receipts where card_id=:card_id';
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':card_id',$card_id);
                //Thực thi câu lệnh truy vấn
                $statement->execute();
                //Lấy một mẫu tin thoả mãn điều kiện truy vấn
                $result = $statement->fetch();
                $statement->closeCursor();
                return $result;
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        
            }
        }
    
        public static function add_data($category){
            $db = Database::getDB();
            try {
                //câu lệnh truy vấn
                $query = "insert into categories(category_id, category_name, more_info)
                          values(:category_id, :category_name, :more_info)";
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':category_id',$category['category_id']);
                $statement->bindValue(':category_name',$category['category_name']);
                $statement->bindValue(':more_info',$category['more_info']);
                //Thực thi câu lệnh truy vấn
                $statement->execute();    
                //đóng truy vấn 
                $statement->closeCursor();        
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        
            }
        }
    
        // Hàm cập nhật 
        public static function update_data($category){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'update categories
                          set category_name = :category_name,
                              more_info = :more_info
                          where category_id = :category_id';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':category_id',$category['category_id']);
                $statement->bindValue(':category_name',$category['category_name']);
                $statement->bindValue(':more_info',$category['more_info']);
                //Thực thi câu lệnh truy vấn
                $statement->execute();  
                $statement->closeCursor();          
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        }
        }
        //Hàm xoá 
        public static function delete_data($category_id){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'delete from categories
                          where category_id = :category_id';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':category_id',$category_id);
                //Thực thi câu lệnh truy vấn
                $statement->execute();    
                $statement->closeCursor();          
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;
            }
        }
    
      
    
    
    }




?>