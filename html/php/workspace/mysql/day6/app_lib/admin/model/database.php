<?php
    $dsn = 'mysql:host=localhost;dbname=libmanagement';
    $username='root';
    $password = '';
    $option = array(
                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                 PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
              );

    //Thực hiện kết nối đến cơ sở dữ liệu
    try {
        $db = new PDO ($dsn, $username, $password, $option);
        // echo "<p>Bạn đã kết nối thành công đến cơ sở dữ liệu libmanagement</p>";
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Kết nối thất bại, kiểm tra lại lỗi kết nối : $error_message </p>";
    }
?>