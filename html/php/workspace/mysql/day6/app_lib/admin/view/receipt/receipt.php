<?php require('./view/home/header.php');?>
    <div class="container">
       <h5>Mã thể loại: <?php echo $category['category_id']?></h5>    
       <h5>Tên thể loại:<?php echo $category['category_name']?></h5> 
       <h5>Thông tin thể loại: </h5> 
       <p><?php echo $category['more_info']?></p> 
    </div>
<?php require('./view/home/footer.php');?>