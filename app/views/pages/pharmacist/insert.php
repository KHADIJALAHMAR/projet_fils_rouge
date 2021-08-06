<?php include_once APPROOT . '/views/inc/header.php'; ?>
<form class="container" action="<?php echo URLROOT; ?>/ControllerPharma/insert" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" name="name-pharma" placeholder="name_pharma">
    </div>
    <div class="container">
    <input type="text" class="form-control" name="localisation" placeholder="localisation">
      </div>
      <div class="container">
    <input type="text" class="form-control" name="phone" placeholder="Numéro_télephone">
      </div>
    <div class="form-group">
              <label for="">Image</label>
              <input type="file"  name="image">
      </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="enter" name="submit">
        </div>
  </div>
</form>