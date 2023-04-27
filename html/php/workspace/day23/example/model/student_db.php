<?php

class Student{
    private $id, $name, $phone, $email, $image, $address;
    public function __construct($id, $name, $phone, $email, $image, $address){
          //Phương thức khởi tạo ==> được tạo ra khi tạo mới 1 đối tượng
          $this->id = $id;
          $this->name = $name;
          $this->phone = $phone;
          $this->email = $email;
          $this->image = $image;
          $this->address = $address;
    }
    public function setId($value){
        $this->id = $value;
    }
    public function setName($value){
        $this->name = $value;
    }
    public function setPhone($value){
        $this->phone = $value;
    }
    public function setEmail($value){
        $this->email = $value;
    }
    public function setImage($value){
        $this->image = $value;
    }
    public function setAddress($value){
        $this->address = $value;
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getImage(){
        return $this->image;
    }
    public function getAddress(){
        return $this->address;
    }
}

//Tạo lớp StudentDB 

class StudentDB{   
    public function get_all_student(){
        global $students;               
        $result = [];//Khai báo biến mảng kết quả để lưu trữ danh sách các đối tượng sinh viên
        foreach ($students as $key => $value) {
            $st = new Student($value['id'],$value['name'],$value['phone'],$value['email'],$value['image'],$value['address']);
            $result[] = $st;
        }
        return $result;
    }    
}

