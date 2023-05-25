<?php

    class studentDB{
        public static function  getDataModel(){
            $db = Database::getDB();
            try {
                //thực hiện câu lệnh truy vấn
                $query = 'select * from students';
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
                $query = 'select * from students where card_id=:card_id';
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
    
        public static function add_data($student){
            $db = Database::getDB();
            try {
                //câu lệnh truy vấn
                $query = "insert into students(card_id, name_student, address, tel)
                          values(:card_id, :name_student, :address, :tel)";
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':card_id',$student['card_id']);
                $statement->bindValue(':name_student',$student['name_student']);
                $statement->bindValue(':address',$student['address']);
                $statement->bindValue(':tel',$student['tel']);
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
        public static function update_data($student){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'update students
                          set name_student = :name_student,
                          address = :address,
                          tel = :tel
                          where card_id = :card_id';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':card_id',$student['card_id']);
                $statement->bindValue(':name_student',$student['name_student']);
                $statement->bindValue(':address',$student['address']);
                $statement->bindValue(':tel',$student['tel']);
                //Thực thi câu lệnh truy vấn
                $statement->execute();    
                $statement->closeCursor();         
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        }
        }
        //Hàm xoá 
        public static function delete_data($card_id){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'delete from students
                          where card_id = :card_id';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':card_id',$card_id);
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