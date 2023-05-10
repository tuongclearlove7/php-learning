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
                        <label for="" class="form-label">Nhập vào tên</label>
                        <input type="text"
                        class="form-control" name="search_value" 
                        id="" aria-describedby="helpId" placeholder="">
                        <br>
                        <button type="submit" class="btn btn-primary" 
                        name="action" value="search_name">Tìm</button>
                    </div>        
                </form> 
            </div>
        <div class="container-table">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">IP Address</th>
                    <th scope="col">Avatar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lists as $key => $value):?>
                    <tr>
                    <th scope="row"><?php echo $value['id']?></th>
                    <td><?php echo $value['name']?></td>
                    <td><?php echo $value['IP']?></td>
                    <td><img src="../image/<?php echo $value['avatar']?>" alt="" ></td>
                    </tr>
                    <?php endforeach;?>
                   
                </tbody>
            </table>
        </div>
    </main>
    <footer>

    </footer>
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>