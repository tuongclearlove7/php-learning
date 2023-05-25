<?php

    class bookDB{

        public static function  getDataModel(){
            $db = Database::getDB();
            try {
                //thực hiện câu lệnh truy vấn
                $query = 'select * from books';
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

        public static function get_data_by_id($book_id){
            $db = Database::getDB();
            try {
                $query = 'select * from books where book_id=:book_id';
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':book_id',$book_id);
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
    
        public static function add_data($book){
            $db = Database::getDB();
            try {
                //câu lệnh truy vấn
                $query = "insert into books(book_id, name_book, publisher, author, category_id, num_of_page, max_date, num, summary, picture)
                          values(:book_id, :name_book, :publisher, :author, :category_id, :num_of_page, :max_date, :num, :summary, :picture)";
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':book_id',$book['book_id']);
                $statement->bindValue(':name_book',$book['name_book']);
                $statement->bindValue(':publisher',$book['publisher']);
                $statement->bindValue(':author',$book['author']);
                $statement->bindValue(':category_id',$book['category_id']);
                $statement->bindValue(':num_of_page',$book['num_of_page']);
                $statement->bindValue(':max_date',$book['max_date']);
                $statement->bindValue(':num',$book['num']);
                $statement->bindValue(':summary',$book['summary']);
                $statement->bindValue(':picture',$book['picture']);
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
        public static function update_data($book){
            $db = Database::getDB();
            try {
        
                $query = 'UPDATE books
                          SET name_book = :name_book,
                              publisher = :publisher,
                              author = :author,
                              category_id = :category_id,
                              num_of_page = :num_of_page,
                              max_date = :max_date,
                              num = :num,
                              summary = :summary,
                              picture = :picture
                           WHERE book_id = :book_id';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':book_id',$book['book_id']);
                $statement->bindValue(':name_book',$book['name_book']);
                $statement->bindValue(':publisher',$book['publisher']);
                $statement->bindValue(':author',$book['author']);
                $statement->bindValue(':category_id',$book['category_id']);
                $statement->bindValue(':num_of_page',$book['num_of_page']);
                $statement->bindValue(':max_date',$book['max_date']);
                $statement->bindValue(':num',$book['num']);
                $statement->bindValue(':summary',$book['summary']);
                $statement->bindValue(':picture',$book['picture']);
                //Thực thi câu lệnh truy vấn
                $statement->execute();  
                $statement->closeCursor();          
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        }
        }
        //Hàm xoá 
        public static function delete_data($book_id){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = "DELETE FROM receipts
                          WHERE book_id = :book_id;
                          DELETE FROM books
                          WHERE book_id = :book_id";
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':book_id',$book_id);
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