
<div class='row'>
    <?php
           foreach ($list_nation as $key => $value):
    ?>  

    <div class="card" style="width: 18rem;">
        <img src="../image/<?php echo $value['image']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $value['name']?></h5>
            <p class="card-text"><?php echo $value['IP']?></p>
            <input type="hidden" id='' value="<?php echo $value['id']?>">
            <button class="btn btn-primary" 
                    type="submit" 
                    name="action" 
                    value='addcard' 
                    id=''>
                Thêm vào giỏ hàng
            </button>
        </div>
    </div>
    <?php endforeach;?>
</div>

























































