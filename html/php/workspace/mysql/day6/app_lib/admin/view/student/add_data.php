<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST">
                <div class="mb-3">
                <label for="" class="form-label">Mã thể loại</label>
                <input type="text" name="card_id" id="card_id" class="form-control" placeholder="Mã sinh viên" aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Tên sinh viên</label>
                <input type="text" name="name_student" id="name_student" class="form-control" placeholder="Tên sinh viên" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Địa chỉ" aria-describedby="helpId">   
                <label for="" class="form-label">Sđt</label>
                <input type="text" name="tel" id="tel" class="form-control" placeholder="sđt" aria-describedby="helpId">              
                </div>
                <button type="submit" name="action" value="save_data" class="btn btn-primary">ADD</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>