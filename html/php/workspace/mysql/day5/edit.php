
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

<a class="btn btn-primary" href="./" role="button">Home</a>

<form action="" method="post">
    <h3>Cập nhật</h3>
    <input type="hidden" class="form-control" id="category_id" name="category_id" aria-describedby="emailHelp">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mã loại</label>
        <input type="" class="form-control" readonly 
        value="<?php echo $category['category_id'];?>" 
        id="category_id" 
        name="category_id" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tên thể loại</label>
        <input type="" class="form-control" 
        value="<?php echo $category['category_name'];?>" 
        id="category_name" 
        name='category_name'>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Thông tin mô tả</label>
        <input type="" class="form-control" 
        value="<?php echo $category['more_info'];?>" 
        id="more_info"  
        name="more_info">
    </div>
    <button type="submit" name='action' value="update_data" class="btn btn-primary">Update</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
