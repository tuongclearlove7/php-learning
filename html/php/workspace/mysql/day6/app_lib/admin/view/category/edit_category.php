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
         <div class="container">
            <form action="" method="POST">
                <h3>Cập nhật thể loại</h3>
                <div class="mb-3">
                <label for="" class="form-label">Mã thể loại gồm 3 ký tự</label>
                <input type="text" name="category_id" id="" value="<?php echo $category['category_id']?>" readonly class="form-control" placeholder="Mã thể loại" aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Tên thể loại</label>
                <input type="text" name="category_name" value="<?php echo $category['category_name']?>" id="" class="form-control" placeholder="Tên thể loại" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Thông tin mô tả</label>
                <input type="text" name="more_info" value="<?php echo $category['more_info']?>" id="" class="form-control" placeholder="Thông tin bổ sung" aria-describedby="helpId">              
                </div>
                <button type="submit" name="action" value="update_category" class="btn btn-primary">Cập nhật thể loại</button>
            </form>
         </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>