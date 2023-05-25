<?php require('./view/home/header.php');?>
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
                <button type="submit" name="action" value="update_data" class="btn btn-primary">Update</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>