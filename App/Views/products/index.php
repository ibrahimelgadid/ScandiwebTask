<?php require_once APPROOT . '/Views/inc/header.php' ?>
<div class="products position-relative">
  <div class="container">
    <h2 class="pt-4">Product List</h2>
    <hr>
    <div class="content ">
      <form action="<?php echo URLROOT ?>/products/delete" method="post" class="d-flex gap-5 flex-wrap">
        <?php
        foreach ($data as $product) : ?>
          <div class="product py-2 px-4 border border-secondary">
            <input class="delete-checkbox" type="checkbox" value="<?php echo $product->sku ?>" name="sku[]">
            <div class="items text-center">
              <div><?php echo $product->sku ?></div>
              <div><?php echo $product->name ?></div>
              <div><?php echo $product->price ?>$</div>
              <div><?php echo $product->attribute ?></div>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="btns position-absolute">
          <button type="submit" class="massDelete btn btn-sm btn-outline-danger">MASS DELETE</button>
          <a href="products/create" class=" btn btn-sm btn-outline-primary">ADD</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require_once APPROOT . '/Views/inc/footer.php' ?>