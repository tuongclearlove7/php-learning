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
                <div class="mb-3">
                <label for="" class="form-label">Nhập mã thể loại gồm 3 ký tự</label>
                <input type="text" name="category_id" id="" class="form-control" placeholder="Mã thể loại" aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Nhập tên thể loại</label>
                <input type="text" name="category_name" id="" class="form-control" placeholder="Tên thể loại" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Nhập thông tin mô tả</label>
                <input type="text" name="more_info" id="" class="form-control" placeholder="THông tin bổ sung" aria-describedby="helpId">              
                </div>
                <button type="submit" name="action" value="save_category" class="btn btn-primary">Thêm thể loại</button>
            </form>
         </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>