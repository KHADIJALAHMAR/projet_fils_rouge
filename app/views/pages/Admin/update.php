<?php include_once APPROOT . '/views/inc/header.php'; ?>


<div class="row justify-contet-center">
<form class="container" action="<?php echo URLROOT; ?>/ControllerAdmin/update" method="POST" enctype="multipart/form-data">
  <div class="form-group">
      <input type="text" class="form-control" name="name-pharma" placeholder="name_pharma"   value="<?php echo $data->name_pharma; ?>">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="localisation" placeholder="localisation"  value="<?php echo $data->localisation; ?>">
      </div>
      <div class="form-group">
    <input type="text" class="form-control" name="phone" placeholder="Numéro_télephone"  value="<?php echo $data->phone; ?>">
      </div>
    <div class="form-group">
              <label for="">Image</label>
              <input type="file"  name="image" >
      </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="enter" name="submit">
        </div>
  </div>
  </div>
</form>