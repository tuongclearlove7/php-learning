<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <h3>Cập nhật thể loại</h3>
                <div class="mb-3">
                <label for="" class="form-label">book id</label>
                <input type="text" name="book_id" id="" value="<?php echo $book['book_id']?>" readonly class="form-control" placeholder="Mã thể loại" aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">name book</label>
                <input type="text" name="name_book" value="<?php echo $book['name_book']?>" id="" class="form-control" placeholder="Tên thể loại" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">publisher</label>
                <input type="text" name="publisher" value="<?php echo $book['publisher']?>" id="" class="form-control" placeholder="Thông tin bổ sung" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">author</label>
                <input type="text" name="author" value="<?php echo $book['author']?>" id="" class="form-control" placeholder="Thông tin bổ sung" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">category_id</label>
                <input type="text" name="category_id" value="<?php echo $book['category_id']?>" id="" class="form-control" placeholder="Thông tin bổ sung" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">num_of_page</label>
                <input type="text" name="num_of_page" value="<?php echo $book['num_of_page']?>" id="" class="form-control" placeholder="Thông tin bổ sung" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">max_date</label>
                <input type="text" name="max_date" value="<?php echo $book['max_date']?>" id="" class="form-control" placeholder="Thông tin bổ sung" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">num</label>
                <input type="text" name="num" value="<?php echo $book['num']?>" id="" class="form-control" placeholder="Thông tin bổ sung" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">summary</label>
                <input type="text" name="summary" value="<?php echo $book['summary']?>" id="" class="form-control" placeholder="Thông tin bổ sung" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">picture</label>
                <input type="file" name="picture" id="" class="form-control" placeholder="picture" aria-describedby="helpId">  
                <input type="hidden" name="old_picture" id=""  value="<?php echo $book['picture']?>" class="form-control" placeholder="summary" aria-describedby="helpId">  
    
            </div>

                </div>
                <button type="submit" name="action" value="update_data" class="btn btn-primary">Update</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>