<?php require_once APPROOT . '/Views/inc/header.php' ?>

<div class="register">
  <div class="content  ">


    <h4 class="text-center my-4">New Product</h4>

    <form action="" method="post">


      <div class="mb-3">
        <input value="<?php echo $data['sku'] ?? '' ?>" type="text" name="sku" id="sku" class="form-control <?php echo !empty($data['sku_err']) ? 'is-invalid' : '' ?> " placeholder="sku">
        <p class="form-text text-muted">
          Insert unique sku like this: <strong>abc-def-ghi or 12d-GFF-545</strong>
        </p>
        <span class="invalid-feedback"><?php echo $data['sku_err'] ?></span>
      </div>

      <div class="mb-3">
        <input value="<?php echo  $data['name'] ?? "" ?>" type="text" name="name" id="name" class="form-control <?php echo !empty($data['name_err']) ? 'is-invalid' : '' ?> " placeholder="name">
        <span class="invalid-feedback"><?php echo $data['name_err'] ?></span>
      </div>

      <div class="mb-3">
        <input value="<?php echo  $data['price'] ?? "" ?>" type="number" name="price" class="form-control <?php echo !empty($data['price_err']) ? 'is-invalid' : '' ?> " placeholder="price">
        <span class="invalid-feedback"><?php echo $data['price_err'] ?></span>
      </div>

      <div class="mb-3">
        <select name="type" id="type" class="form-control <?php echo !empty($data['type_err']) ? 'is-invalid' : '' ?> ">
          <option value="NOTYPE">TypeSwitcher</option>
          <option value="BOOK" <?php echo  isset($data['type']) &&  $data['type'] == "BOOK" ? "selected" : "" ?>>BOOK</option>
          <option value="DVD" <?php echo   isset($data['type']) && $data['type'] == "DVD" ? "selected" : "" ?>>DVD</option>
          <option value="FURNITURE" <?php echo  isset($data['type']) &&  $data['type'] == "FURNITURE" ? "selected" : "" ?>>FURNITURE</option>
        </select>
        <span class="invalid-feedback"><?php echo $data['type_err'] ?></span>
      </div>

      <div id="Sections" class="mb-5">
        <fieldset id="DVD" class="<?php echo isset($data['type']) && $data['type'] == "DVD" ? "" : "d-none" ?>">
          <div class="row mb-1">
            <legend>Provide size</legend>
          </div>
          <div class="row mb-3 g-3 align-items-center">
            <div class="col-sm-2 col-lg-1">
              <label for="size" class="col-form-label">Size (MB)</label>
            </div>
            <div class="col-sm-auto">
              <input type="number" step="1" min="1" id="size" name="size" class="form-control <?php echo !empty($data['size_err']) ? 'is-invalid' : '' ?>" value="<?= $data['size'] ?? '' ?>">
              <div class="invalid-feedback">
                Please set a valid size.
              </div>
            </div>
            <div class="col-sm-auto">
              <span class="form-text">
                Size needs to be a positive integer.
              </span>
            </div>
          </div>
        </fieldset>

        <fieldset id="BOOK" class="<?php echo isset($data['type']) && $data['type'] == "BOOK" ? "" : "d-none" ?>">
          <div class="row mb-1">
            <legend>Provide weight</legend>
          </div>
          <div class="row mb-3 g-3 align-items-center">
            <div class="col-sm-2 col-lg-1">
              <label for="size" class="col-form-label">Weight (KG)</label>
            </div>
            <div class="col-sm-auto">
              <input type="number" step="1" min="1" id="weight" name="weight" class="form-control <?php echo !empty($data['weight_err']) ? 'is-invalid' : '' ?>" value="<?= $data['weight'] ?? '' ?>">
              <div class="invalid-feedback">
                Please set a valid weight.
              </div>
            </div>
            <div class="col-sm-auto">
              <span class="form-text">
                Weight needs to be a positive integer.
              </span>
            </div>
          </div>
        </fieldset>

        <fieldset id="FURNITURE" class="<?php echo isset($data['type']) && $data['type'] == "FURNITURE" ? "" : "d-none" ?>">
          <div class="row mb-1">
            <legend>Provide dimensions</legend>
          </div>
          <div class="row mb-3 g-3 align-items-center">
            <div class="col-sm-2 col-lg-1">
              <label for="size" class="col-form-label">Height (CM)</label>
            </div>
            <div class="col-sm-auto">
              <input type="number" step="1" min="1" id="height" name="height" class="form-control <?php echo !empty($data['height_err']) ? 'is-invalid' : '' ?>" value="<?= $data['height'] ?? '' ?>">
              <div class="invalid-feedback">
                Please set a valid height.
              </div>
            </div>
            <div class="col-sm-auto">
              <span class="form-text">
                Height needs to be a positive integer.
              </span>
            </div>
          </div>
          <div class="row mb-3 g-3 align-items-center">
            <div class="col-sm-2 col-lg-1">
              <label for="size" class="col-form-label">Width (CM)</label>
            </div>
            <div class="col-sm-auto">
              <input type="number" step="1" min="1" id="width" name="width" class="form-control <?php echo !empty($data['width_err']) ? 'is-invalid' : '' ?>" value="<?= $data['width'] ?? '' ?>">
              <div class="invalid-feedback">
                Please set a valid width.
              </div>
            </div>
            <div class="col-sm-auto">
              <span class="form-text">
                Width needs to be a positive integer.
              </span>
            </div>
          </div>
          <div class="row mb-3 g-3 align-items-center">
            <div class="col-sm-2 col-lg-1">
              <label for="size" class="col-form-label">Length (CM)</label>
            </div>
            <div class="col-sm-auto">
              <input type="number" step="1" min="1" id="length" name="length" class="form-control <?php echo !empty($data['length_err']) ? 'is-invalid' : '' ?>" value="<?= $data['length'] ?? '' ?>">
              <div class="invalid-feedback">
                Please set a valid length.
              </div>
            </div>
            <div class="col-sm-auto">
              <span class="form-text">
                Length needs to be a positive integer.
              </span>
            </div>
          </div>
        </fieldset>
      </div>



      <div class="mb-3">
        <input type="submit" value="Submit" class="form-control bg-primary text-white">
      </div>


    </form>
  </div>
</div>


<script src="<?php echo URLROOT ?>/js/add.js"></script>
<?php require_once APPROOT . '/Views/inc/footer.php' ?>