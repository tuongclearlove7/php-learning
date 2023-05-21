<?php 


    class student{

        private $id, $name, $gioitinh, $email, $image, $address;
        
        public function __construct($id, $name, $gioitinh, $email, $image, $address){

            $this -> id = $id;
            $this -> name = $name;
            $this -> gioitinh = $gioitinh;
            $this -> email = $email;
            $this -> image = $image;
            $this -> address = $address;
        
        }

        public function setID($value){
            $this -> id = $value;
        }

        public function getID(){

            return $this->id;
       }
        public function setName($value){
            $this -> name = $value;
        }

        public function getName(){

            return $this->name;
       }

        public function setGioitinh($value){
            $this -> gioitinh = $value;
        }

        public function getGioitinh(){

            return $this->gioitinh;
       }

        public function setEmail($value){
            $this -> email = $value;
        }

        public function getEmail(){
            return $this->email;
       }

        public function setImage($value){
            $this -> image = $value;
        }

        public function getImage(){
            return $this->image;
       }

        public function setAddress($value){
            $this -> address = $value;
        }

        public function getAddress(){
            return $this->address;
       }
    }


    //tạo lớp student db 

    class StudentDB{   
        public static function get_all_student(){
            global $students;               
            $result = [];//Khai báo biến mảng kết quả để lưu trữ danh sách các đối tượng sinh viên
            foreach ($students as $key => $value) {
                $st = new student(
                $value['id'],
                $value['name'],
                $value['gioitinh'],
                $value['email'],
                $value['image'],
                $value['address']);
                $result[] = $st;
            }
            return $result;
        }    
    }

?>


































