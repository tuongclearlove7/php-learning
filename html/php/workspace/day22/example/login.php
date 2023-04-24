<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login vaof hệ thống</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <form action="" method="post">
        <div class="mb-3">
          <label for="" class="form-label">User Name</label>
          <input type="text"
            class="form-control" name="username" id="" aria-describedby="helpId" placeholder="UserName"
            value="<?php echo isset($_COOKIE['username'])? $_COOKIE['username']: '' ?>"
            >          
        </div>
        <div class="mb-3">
          <label for="" class="form-label">password</label>
          <input type="password"
            class="form-control" name="password" id="" aria-describedby="helpId" placeholder="PassWord"
            value="<?php echo isset($_COOKIE['password'])? $_COOKIE['password']: '' ?>"
            >          
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" value="rememberme" id="">
          <label class="form-check-label" for="">
            Remember Me
          </label>
        </div>        
        <button type="submit" name="action" value="checklogin" class="btn btn-primary">Login</button>
    </form>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>