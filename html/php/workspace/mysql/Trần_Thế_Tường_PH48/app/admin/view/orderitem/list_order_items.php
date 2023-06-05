<?php require('./view/home/header.php');?>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Item ID</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Item price</th>
                        <th scope="col">quantity</th>
                      
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value):?>
                    <tr class="">
                        <td ><?php echo $value['item_id']?></td>
                        <td><?php echo $value['order_id']?></td>
                        <td><?php echo $value['product_id']?></td>
                        <td><?php echo $value['item_price']?></td>
                        <td><?php echo $value['quantity']?></td>

                      
                    </tr>  
                    <?php endforeach;?>                  
                </tbody>
            </table>
        </div>        
    </div>
<?php require('./view/home/footer.php');?>