<?php 


    class product{

        private $name, $description, $price;
        
        public function __construct($name, $description, $price){

           
            $this -> name = $name;
            $this -> description = $description;
            $this -> price = $price;
        
        }

        public function setName($value){
            $this -> name = $value;
        }

        public function getName(){

            return $this->name;
       }

       public function setDescription($value){
            $this -> description = $value;
        }

        public function getDescription(){

            return $this->description;
        }
        
        public function setPrice($value){
            $this -> price = $value;
        }

        public function getPrice(){

            return $this->price;
        }
      
      
    }


    //tạo lớp student db 
    class productDB{   
        public static function get_all_product(){
            global $products;               
            $result = [];//Khai báo biến mảng kết quả để lưu trữ danh sách các đối tượng sinh viên
            foreach ($products as $key => $value) {
                $st = new product(
                $value['name'],
                $value['description'],
                $value['price'],
            );
                $result[] = $st;
            }
            return $result;
        }    
    }

?>


































