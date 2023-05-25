<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                <label for="" class="form-label">Nhập mã sách</label>
                <input type="text" name="book_id" id="" class="form-control" placeholder="mã sách" aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Nhập tên sách</label>
                <input type="text" name="name_book" id="" class="form-control" placeholder="Tên thể loại" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Nhập publisher</label>
                <input type="text" name="publisher" id="" class="form-control" placeholder="publisher" aria-describedby="helpId">  
                <label for="" class="form-label">Nhập author</label>
                <input type="text" name="author" id="" class="form-control" placeholder="author" aria-describedby="helpId">  
                <label for="" class="form-label">Chọn thể loại sách</label>
                <input type="text" name="category_id" id="" class="form-control" placeholder="category_id" aria-describedby="helpId">  
                <label for="" class="form-label">Nhập num_of_page</label>
                <input type="text" name="num_of_page" id="" class="form-control" placeholder="num_of_page" aria-describedby="helpId">  
                <label for="" class="form-label">Nhập max_date</label>
                <input type="text" name="max_date" id="" class="form-control" placeholder="max_date" aria-describedby="helpId">  
                <label for="" class="form-label">Nhập num</label>
                <input type="text" name="num" id="" class="form-control" placeholder="num" aria-describedby="helpId">  
                <label for="" class="form-label">Nhập summary</label>
                <input type="text" name="summary" id="" class="form-control" placeholder="summary" aria-describedby="helpId">  
                <label for="" class="form-label">Picture</label>
                <input type="file" name="picture" id="" class="form-control" placeholder="summary" aria-describedby="helpId">  



                </div>
                <button type="submit" name="action" value="save_data" class="btn btn-primary">ADD</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>