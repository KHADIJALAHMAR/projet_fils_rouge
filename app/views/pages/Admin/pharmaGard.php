<?php include_once APPROOT . '/views/inc/header.php'; ?>




<?php foreach ($data as $row):?>
<div>
  <input type="radio" id="louie" name="drone" value="louie">
  <label for="louie">Louie</label>
  <input type="submit" class="btn btn-primary" value="enter" name="submit">
</div>
<?php endforeach;?>