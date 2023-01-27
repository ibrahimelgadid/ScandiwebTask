<?php require_once APPROOT . '/Views/inc/header.php' ?>


<div class="products">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center pt-4">

      <h2>Product List</h2>
      <div class="btns d-flex gap-2">

        <a href="<?php echo URLROOT ?>/products/create" class="btn  btn-sm btn-outline-primary">Add</a>

        <form action="<?php echo URLROOT ?>/products/delete" method="post">
          <input type="hidden" class="deletedIDs pointer" value="" name="deletedIDs">
          <button type="submit" class="massDelete btn btn-sm btn-outline-danger">MASS DELETE</button>
        </form>

      </div>

    </div>
    <hr>
    <div class="content d-flex gap-5 flex-wrap">

      <?php

      foreach ($data as $product) : ?>

        <div class="product py-2 px-4 position-relative border border-secondary">
          <form action="">

            <input class="delete-checkbox position-absolute" type="checkbox" value="" id="<?php echo $product->sku ?>">
          </form>
          <div class="items text-center">
            <div><?php echo $product->sku ?></div>
            <div><?php echo $product->name ?></div>
            <div><?php echo $product->price ?>$</div>
            <div>

              <?php
              echo $product->type == "FURNITURE" ?  "Dimension " . $product->attribute : ($product->type == "DVD" ? "Size " .  $product->attribute . " MG" :
                "Weight " . $product->attribute . " KG")


              ?></div>
          </div>
        </div>

      <?php endforeach; ?>
    </div>

  </div>




</div>

<script src="<?php echo URLROOT ?>/js/delete.js"></script>
<?php require_once APPROOT . '/Views/inc/footer.php' ?>