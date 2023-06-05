<?php require('./view/home/header_login.php');?>
<div class="container">
         <div class="container">
            <form action="" method="POST">
                <div class="mb-3">
                <label for="" class="form-label">email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="email" aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="password" aria-describedby="helpId">              
                </div>
                <button type="submit" name="action" value="login" class="btn btn-primary">Đăng nhập</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>
































