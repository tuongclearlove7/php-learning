<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
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
            <div class='form-user'>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Username"
                        value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username']: '' ?>"
                        >                         
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password"
                        value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password']: '' ?>"
                        >  
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" value="remember_me" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="action" value="check_login">Login</button>
                </form>
            </div>
    </main>
    <footer>

    </footer>
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>