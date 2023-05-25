<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST">
                <h3>Cập nhật thể loại</h3>
                <div class="mb-3">
                <label for="" class="form-label">Mã sinh viên</label>
                <input type="text" name="card_id" id="" value="<?php echo $student['card_id']?>" readonly class="form-control" placeholder="Mã thể loại" aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Tên sinh viên</label>
                <input type="text" name="name_student" value="<?php echo $student['name_student']?>" id="" class="form-control" placeholder="Tên thể loại" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" name="address" value="<?php echo $student['address']?>" id="" class="form-control" placeholder="Địa chỉ" aria-describedby="helpId">              
                <label for="" class="form-label">Sđt</label>
                <input type="text" name="tel" value="<?php echo $student['tel']?>" id="" class="form-control" placeholder="Địa chỉ" aria-describedby="helpId">      
            </div>
                <button type="submit" name="action" value="update_data" class="btn btn-primary">Update</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>