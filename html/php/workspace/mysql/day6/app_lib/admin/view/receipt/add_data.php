<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST">
                <div class="mb-3">
                <label for="" class="form-label">Nhập mã thể loại</label>
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
                <button type="submit" name="action" value="save_data" class="btn btn-primary">ADD</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>