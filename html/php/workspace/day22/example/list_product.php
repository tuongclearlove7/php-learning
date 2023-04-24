<div class="row">
    <?php
        foreach ($list_product as $key => $value):
    ?>
    <div class="card col-md-3">
        <form action="" method="post">
        <img class="card-img-top" src="../../image/<?php echo $value['image']?>" alt="Title">
        <div class="card-body">
            <h4 class="card-title"><?php echo $value['name']?></h4>
            <p class="card-text"><?php echo $value['price']?></p>            
        </div>
        <input type="hidden" name="id" value="<?php echo $value['id']?>">
        <div class="d-grid gap-2">
          <button type="submit" name="action" value="addcart" id="" class="btn btn-primary">Thêm vào giỏ hàng</button>
        </div>
        </form>
    </div>
    <?php
        endforeach;
    ?>
</div>