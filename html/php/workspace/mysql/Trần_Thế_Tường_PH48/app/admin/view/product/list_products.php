<?php require('./view/home/header.php');?>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">product ID</th>
                        <th scope="col">Category ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">product Name</th>
                        <th scope="col">price</th>
                       
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value):?>
                    <tr class="">
                        <td ><?php echo $value['product_id']?></td>
                        <td><?php echo $value['category_id']?></td>
                        <td><?php echo $value['category_name']?></td>
                        <td><?php echo $value['product_name']?></td>
                        <td><?php echo $value['price']?></td>
                      
                    </tr>  
                    <?php endforeach;?>                  
                </tbody>
            </table>
        </div>        
    </div>
<?php require('./view/home/footer.php');?>