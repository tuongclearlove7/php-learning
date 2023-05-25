<?php require('./view/home/header.php');?>
    <div class="container">
        <a class="btn btn-primary" href="?controller=studentController&action=add_data" role="button">Thêm mới</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">card ID</th>
                        <th scope="col"> Name student</th>
                        <th scope="col">Address</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Detail</th>
                        <th scope="col" colspan='2'>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value):?>
                    <tr class="">
                        <td ><?php echo $value['card_id']?></td>
                        <td><?php echo $value['name_student']?></td>
                        <td><?php echo $value['address']?></td>
                        <td><?php echo $value['tel']?></td>
                        <td><a href="?controller=studentController&action=show_data&card_id=<?php echo $value['card_id']?>">
                                <button type="button" class="btn btn-primary">Show</button></a></td>
                        <td><a href="?controller=studentController&action=edit&card_id=<?php echo $value['card_id']?>">
                                <button type="button" class="btn btn-dark">Edit</button>
                            </a></td>
                        <td><a href="?controller=studentController&action=delete&card_id=<?php echo $value['card_id']?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a></td>
                    </tr>  
                    <?php endforeach;?>                  
                </tbody>
            </table>
        </div>        
    </div>
<?php require('./view/home/footer.php');?>