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
        <a href="."><button type="button" class="btn btn-primary">Home Category</button></a>
       <h5>Mã thể loại: <?php echo $category['category_id']?></h5>    
       <h5>Tên thể loại:<?php echo $category['category_name']?></h5> 
       <h5>Thông tin thể loại: </h5> 
       <p><?php echo $category['more_info']?></p> 
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>