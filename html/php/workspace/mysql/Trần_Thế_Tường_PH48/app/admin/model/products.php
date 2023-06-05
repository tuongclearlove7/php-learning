<?php

    class productDB{

        public static function  getDataModel(){
            $db = Database::getDB();
            try {
                //thực hiện câu lệnh truy vấn
                $query = 'select * from products, categories
                          where categories.category_id = products.category_id';
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
    
    }




?>