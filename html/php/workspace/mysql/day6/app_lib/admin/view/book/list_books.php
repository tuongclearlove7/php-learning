<?php require('./view/home/header.php');?>
    <div class="container">
        <a class="btn btn-primary" href="?controller=bookController&action=add_data" role="button">Thêm mới</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Book ID</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Publisher</th>
                        <th scope="col">Author</th>
                        <th scope="col">category_id</th>
                        <th scope="col">num_of_page</th>
                        <th scope="col">max_date</th>
                        <th scope="col">num</th>
                        <th scope="col">summary</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Detail</th>
                        <th scope="col" colspan='2'>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value):?>
                    <tr class="">
                        <td ><?php echo $value['book_id']?></td>
                        <td><?php echo $value['name_book']?></td>
                        <td><?php echo $value['publisher']?></td>
                        <td><?php echo $value['author']?></td>
                        <td><?php echo $value['category_id']?></td>
                        <td><?php echo $value['num_of_page']?></td>
                        <td><?php echo $value['max_date']?></td>
                        <td><?php echo $value['num']?></td>
                        <td><?php echo $value['summary']?></td>
                        <td><img style="height: 50px; width:50px;" src="./public/image/<?php echo $value['picture']?>" alt=""></td>
                        <td><a href="?controller=bookController&action=show_data&book_id=<?php echo $value['book_id']?>">
                                <button type="button" class="btn btn-primary">Show</button></a></td>
                        <td><a href="?controller=bookController&action=edit&book_id=<?php echo $value['book_id']?>">
                                <button type="button" class="btn btn-dark">Edit</button>
                            </a></td>
                        <td><a href="?controller=bookController&action=delete&book_id=<?php echo $value['book_id']?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a></td>
                    </tr>  
                    <?php endforeach;?>                  
                </tbody>
            </table>
        </div>        
    </div>
<?php require('./view/home/footer.php');?>