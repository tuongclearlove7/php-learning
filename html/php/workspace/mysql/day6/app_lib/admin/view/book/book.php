<?php require('./view/home/header.php');?>
    <div class="container">
       <h5>Mã sách: <?php echo $book['book_id']?></h5>    
       <h5>Tên sách:<?php echo $book['name_book']?></h5> 
       <h5>publisher : </h5> <p><?php echo $book['publisher']?></p> 
       <h5>author : <?php echo $book['author']?></h5>    
       <h5>category id : <?php echo $book['category_id']?></h5>
       <h5>num_of_page : <?php echo $book['num_of_page']?></h5>    
       <h5>max_date : <?php echo $book['max_date']?></h5>    
       <h5>num : <?php echo $book['num']?></h5>    
       <h5>summary : <?php echo $book['summary']?></h5>        
       <h5>Picture</h5>
       <img src="./public/image/<?php echo $book['picture']?>" alt="ảnh">        
    </div>
<?php require('./view/home/footer.php');?>