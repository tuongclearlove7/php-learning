<?php
    $message = "<br>THÔNG TIN CỦA HỌC VIÊN THAM DỰ";
    $image = "<br> <img src='images/avata.jpg' alt=''> ";
    $name=$_GET['name'];
    $name="<br> Name: ".$name;
    $phone="<br>Phone:".$_GET['phone'];
    $address="<br>Address:".$_GET['address'];
    $description="<br>Description: Thích thể thao, du lịch, âm nhạc, ....";
    $m1 = 8.7; //Hệ số 2
    $m2 = 9.2; //hệ số 1
    $m3 = 6.9; // hệ số 3
    $m4 = 8.5; // hệ số 4
    $m5 =7.8; // hệ số 2
    $average = ($m1*2+$m2+$m3*3+$m4*4+$m5*2)/12;
    $result ="Kết quả học tập: Môn 1: $m1 , Môn 2: $m2 , Môn 3: $m3 , Môn 4: $m4 , Môn 5: $m5 , Điểm TB: $average";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng lớp PHP 48</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>CHÀO MỪNG CÁC BẠN ĐẾN VỚI KHOÁ HỌC LẬP TRÌNH PHP CƠ BẢN 2023</h1>
        <img src="images/imgphp.jpg" alt="">
        <a href="?name=Trần Hưng Đạo&phone=9898989898&address=12 Phan Châu Trinh, Tp Đà Nẵng">Bấm vào để lấy tên</a>
        <h2>
            <?php
                echo $message;
            ?>
        </h2>
        <p>
            <?php
                echo $image; // In ảnh đại diện ra màn hình
                echo $name; # In tên học viên ra màn hình
                echo $phone; 
                /*
                    Thông tin địa chỉ học viên xuất tại đây
                */
                echo $address;
                echo $description;
            ?>
        </p>
        <h4>
            <?php
             echo $result;
            ?>
        </h4>
    </div>
    
</body>
</html>