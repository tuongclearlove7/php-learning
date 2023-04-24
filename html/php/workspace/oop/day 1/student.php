<?php
//định nghĩa lớp student
class student{

    private $id, $name, $phone, $email, $address;
    public function __construct($id, $name, $phone, $email, $address){
        $this -> id = $id;
        $this -> name = $name;
        $this -> phone = $phone;
        $this -> email = $email;
        $this -> address = $address;
    
    }

    public function print_student(){
        echo $this -> id;
        echo  $this -> name;
        echo  $this -> phone;
        echo  $this -> email;
        echo  $this -> address;
    }

    public function setName($value){

        $this -> name = $value;
    }

    public function getName(){

         return $this->name;
    }
}

$student2 = new student('<h1 style="color:red;">01<br>','tuong<br>','0915662495<br>','lol00server@gmail.com<br>','31 nguyen khuyen</h1>');
$student3 = new student('<h1 style="color:blue;">02<br>','tuong<br>','0915662495<br>','lol00server@gmail.com<br>','31 nguyen khuyen</h1>');

$student2->setName("clearlove7<br>");
$student2->print_student();

$student3->print_student();
echo "get name : " .$student2->getName();

?>





































