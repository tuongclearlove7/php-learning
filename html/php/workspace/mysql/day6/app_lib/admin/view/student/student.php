<?php require('./view/home/header.php');?>
    <div class="container">
       <h5>Mã sinh viên : <?php echo $student['card_id']?></h5>    
       <h5>Tênsinh viên :<?php echo $student['name_student']?></h5> 
       <h5>Địa chỉ : </h5> <p><?php echo $student['address']?></p> 
       <h5>Sđt : </h5> <p><?php echo $student['tel']?></p> 
    </div>
<?php require('./view/home/footer.php');?>