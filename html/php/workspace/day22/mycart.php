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
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="?action=homepage" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <form class="d-flex my-2 my-lg-0 " action="" method="POST">                    
                    <button class="btn btn-outline-success my-2 my-sm-0" name="action" value="mycart" type="submit">MyCart</button>
                </form>
                <!-- Hover added -->
                <a name="action" id="" class="btn btn-primary" href="?action=logout" role="button">Logout</a>                
            </div>
      </div>
    </nav>   
    
     <main>
        <h2>Danh sách các mạt hàng bạn đã chọn mua</h2>
     </main>
    <div class="list-product">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên hàng</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['mycart'][$username] as $key => $value):?>
                    <tr class="">
                        <td scope="row"><?php echo $key+1?></td>
                        <td><?php echo $value['name']?></td>
                        <td><?php echo $value['quantity']?></td>
                        <td><?php echo $value['price']?></td>
                        <td><?php echo $value['quantity']*$value['price']?></td>   
                        <td><a name="action" id="" class="btn btn-primary" href="?action=delete&key=<?php echo $key?>" role="button">Xoá</a></td>                     
                    </tr>
                    <?php endforeach;?>
                    <tr class="">
                        <th scope="row" colspan="4">Tổng tiền</th>                        
                        <th><?php echo total_cart($_SESSION['mycart'][$username])?></th>   
                        <th></th>                     
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>