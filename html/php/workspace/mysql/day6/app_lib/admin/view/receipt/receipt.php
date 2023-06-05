<?php require('./view/home/header.php');?>
    <div class="container">
       <h5>Card ID : <?php echo $receipt['card_id']?></h5>    
       <h5>Book ID :<?php echo $receipt['book_id']?></h5> 
       <h5>Date borow : <?php echo $receipt['date_borow']?></h5> 
       <h5>Date return : <?php echo $receipt['date_return']?></h5> 
       <h5>Return OK : <?php echo $receipt['return_ok']?></h5> 
    </div>
<?php require('./view/home/footer.php');?>