<?php require('./view/home/header.php');?>
    <div class="container">
        <a class="btn btn-primary" href="?controller=categoryController&action=add_data" role="button">Thêm mới</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Card ID</th>
                        <th scope="col">book ID</th>
                        <th scope="col">Date borow</th>
                        <th scope="col">Date return</th>
                        <th scope="col">Return OK</th>
                        <th scope="col">Detail</th>
                        <!-- <th scope="col" colspan='2'>Action</th> -->
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value):?>
                    <tr class="">
                        <td ><?php echo $value['card_id']?></td>
                        <td><?php echo $value['book_id']?></td>
                        <td><?php echo $value['date_borow']?></td>
                        <td><?php echo $value['date_return']?></td>
                        <td><?php echo $value['return_ok']?></td>
                        <td><a href="?controller=receiptController&action=show_data&card_id=<?php echo $value['card_id']?>">
                        <button type="button" class="btn btn-primary">Show</button></a>
                        </td>
                        <!-- <td><a href="?controller=categoryController&action=edit&category_id=<?php echo $value['category_id']?>">
                                <button type="button" class="btn btn-dark">Edit</button>
                            </a></td>
                        <td><a href="?controller=categoryController&action=delete&category_id=<?php echo $value['category_id']?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a></td> -->
                    </tr>  
                    <?php endforeach;?>                  
                </tbody>
            </table>
        </div>        
    </div>
<?php require('./view/home/footer.php');?>