<?php
    $database = 'libmanagement';
    $dm = 'mysql:host=localhost;dbname='.$database;
    $username='root';
    $password = '';
    $option = array(
                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                 PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
              );

    //Thực hiện kết nối đến cơ sở dữ liệu
    try {
        $db = new PDO ($dm, $username, $password, $option);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
    }
?>