<?php
    //xu ly login
    // check logic
    // nếu $email = lol00sever@gmail.com và đồng thời $password = 123 thì thông báo: Login OK
    // ngược lại thì thông báo: Login Fail

    if(isset($_GET["login"])){
        $email = $_GET['email'];
        $password = $_GET['password'];
        //  $email = filter_input(type: INPUT_GET, var_name: 'email');
        //  $password = filter_input(type: INPUT_GET, var_name: 'password');

        //check valid
        $check = true;

        if(empty($email)){
            $error_email ="vui long nhap email";
            $check = false;    
        }
        if(empty($password)){
            $error_password ="vui long nhap password";
            $check = false;    
        }

        //check logic : uu tien kiem tra xem bien check co = true hay k
        if($check == true){
            if ($email == 'lol00sever@gmail.com' && $password == '123')
                'Login OK';
            else
                'Login Fail';
        }  
    }
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
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
                <form action="login.php" method="get">
                    <h2>Login</h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"placeholder="email" value="<?php echo isset($email) ? $email : ""?>">
                        <p> <?php echo isset($error_email) ? $error_email : ""?></p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="password" value="<?php echo isset($password) ? $password : ""?>">
                        <p><?php echo isset($error_password) ? $error_password : ""?></p>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Submit</button>

                </form>
            </div>

            <div class="message">
                <h3>
                <?php
                   
                    if(isset($_GET["login"])){
                        $email = $_GET['email'];
                        $password = $_GET['password'];
                        //check valid
                        if($email == null){
                            "vui long nhap vao o email";
                        }else if($password == null){
                            "vui long nhap vao o mat khau";
                        }
                        else{
                            if ($email == 'lol00sever@gmail.com' && $password == '123')
                                echo '<p style="color:rgb(21, 232, 39);">Login success</p>';
                            else
                                echo '<p style="color:red;">Login Fail </p>';
                        }
                                               
                    }
                ?>
                </h3>
            </div>



        </main>
        <footer>

        </footer>

    </div>


</body>

</html>