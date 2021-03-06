<?php include_once APPROOT . '/views/inc/headerp.php'; ?>
<!-- flèche pharmacie de gard -->
<div class="parent-pharma row content-p w-100">
<div class="child-1 ">
    <p class="ml-2 mt-1 font-weight-bold">Gard pharmacies</p>
</div>
    <div class="child-2 ">

    </div>
</div>
<!-- pharma gard -->
<div class="content-p">
<div class="card content  " style="width: 18rem;">
    <img  src="<?php echo URLROOT; ?>/assets/img/<?= $data['garde_pharmacy']->image ?>" class="card-img-top " class=""  alt="img">
    <div class="card-body">
    <h5 class="card-title"><?= $data['garde_pharmacy']->name_pharma ?></h5>
    <a href="#" class="card-link"><?= $data['garde_pharmacy']->localisation ?></a>
    <p class="card-text"><?= $data['garde_pharmacy']->phone ?></p>

    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<!-- button -->
<?php if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin"): ?>
  <div class="container">
  <a class="btn btn-primary"  href="<?php echo URLROOT; ?>/ControllerPharma/show_gard">Ajouter</a>
<?php endif; ?>
</div>
<!-- card tous pharma -->
<!--  -->
<!-- maps -->



    <!-- ################################# -->
    <div class="container">
  
    <div class="row row-cols-1 row-cols-md-2 g-4  ">
    <?php foreach ($data['pharmacies'] as $row):?>
    <div class="col-md-4 content-p">
    <div class="card ">
    <div class="inner">
      <img src="<?= URLROOT."/assets/img/".$row->image; ?>" class="card-img-top" alt="image">
    </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $row->name_pharma;?></h5>
        <p class="card-text"><?php echo $row->phone;?></p>
        <a href="#" class="btn btn-primary" > <?php echo $row->localisation;?> Go somewhere</a>
      </div>
    </div>
  </div>
  <?php endforeach;?>
    </div>
    
    </div>
    <?php include_once APPROOT . '/views/inc/footer.php'; ?>
  
    
    
  