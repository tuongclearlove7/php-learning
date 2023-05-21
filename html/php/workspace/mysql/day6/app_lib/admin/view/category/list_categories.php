<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
   <a class="btn btn-primary" href="?action=add_category_form" role="button">Thêm mới</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Category ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">More information</th>
                        <th scope="col">Detail</th>
                        <th scope="col" colspan='2'>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $key => $value):?>
                    <tr class="">
                        <td ><?php echo $value['category_id']?></td>
                        <td><?php echo $value['category_name']?></td>
                        <td><?php echo $value['more_info']?></td>
                        <td><a href="?action=showcategory&category_id=<?php echo $value['category_id']?>"><button type="button" class="btn btn-primary">Show</button></a></td>
                        <td><a href="?action=edit&category_id=<?php echo $value['category_id']?>">
                                <button type="button" class="btn btn-success">Edit</button>
                            </a></td>
                        <td><a href="?action=delete&category_id=<?php echo $value['category_id']?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a></td>
                    </tr>  
                    <?php endforeach;?>                  
                </tbody>
            </table>
        </div>        
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>