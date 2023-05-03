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
        <h2>Chào mừng các bạn đến trang web chúng tôi</h2>
     </main>
    <div class="list-student">
       <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Danh sách sinh viên</caption>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php foreach ($list_obj_student as $key => $value):?>               
                    <tr class="table-primary" >
                        <td scope="row"><?php echo $value->getId()?></td>
                        <td><?php echo $value->getName()?></td>
                        <td><?php echo $value->getPhone()?></td>
                        <td><?php echo $value->getEmail()?></td>
                        <td><img src="../../../image/<?php echo $value->getImage()?>" alt="" height='70'></td>
                        <td><?php echo $value->getAddress()?></td>                        
                    </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot>                    
                </tfoot>
        </table>
       </div>
       
    </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>