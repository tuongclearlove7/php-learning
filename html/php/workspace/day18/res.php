<?php
require('./kiem_tra_nam_nhuan.php');
require('./UCLN.php');
require('./split_string.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <header>
            <div class="logo">
                <h1>
                    php learning
                </h1>
            </div>

            <div class="banner">
                <img src="../image/php1.png" alt="">
            </div>
        </header>

        <main>
                
        <div class="form-user">
            <form action="" method="post" class="">
                <h2>Kiểm tra năm nhuận</h2>
                 <div class="mb-3">
                    <input type="text" name="month" class="form-control" id="exampleInputEmail1" placeholder="nhập tháng">
                </div>
                <div class="mb-3">
                    <input type="text" name="year" class="form-control" id="exampleInputEmail1" placeholder="nhập năm">
                </div>

                <h2>Tìm ước chung lớn nhất</h2>
                <div class="mb-3">
                    <input type="text" name="a" class="form-control" id="exampleInputEmail1" placeholder="nhập a">
                </div>
                <div class="mb-3">
                    <input type="text" name="b" class="form-control" id="exampleInputEmail1" placeholder="nhập b">
                </div>

                <h2>Tách họ và tên</h2>
                <div class="mb-3">
                    <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" placeholder="nhập tên">
                </div>

                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Three</option>
                    <option value="5">Three</option>

                </select>
                
                <button type="submit" name="submit" class="btn btn-primary">Kiểm tra</button>
            </form>
            <div class="res"><p><?php echo $res;?></p></div>
            <div class="res"><p><?php echo $res2;?></p></div>
            <div class="res"><p><?php echo $string;?></p></div>
            <div class="res"><p><?php echo $upper;?></p></div>


        </div>
        </main>
        <footer>

        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>