<?php include_once APPROOT . '/views/inc/header.php'; ?>
<?php include_once APPROOT . '/views/inc/navbar.php';?>
<div class="row py-5 px-4 main-profil">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="<?php echo URLROOT; ?>/assets/img/profil4.jpg"  alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-success btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5 text-dark">
                        <h4 class="mt-0 mb-0 "  style="color:#42B130">khadija lahmar</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>Youssoufia</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">email</h5><small class="text-muted"> <i class="bi bi-envelope"></i>pharmacist@gmail.com</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block ">Numéro</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Numéro-télephone</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">localisation</h5><small class="text-muted"> <i class="fas fa-map-marker-alt mr-2"></i>localisation</small>
                    </li>

                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">About</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <h3 class="font-italic mb-0"  style="color:#42B130">gard pharmacies</h3>
                    <p class="font-italic mb-0">we help you know the available gard pharmaciesevery day.</p>
                    <p class="font-italic mb-0"></p>
                </div>
            </div>
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Post</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                <div class="profile-info col-md-9">
      <div class="panel">
          <footer class="panel-footer">
              <a href="<?php echo URLROOT; ?>/ControllerPharma/insert" class="btn btn-warning pull-right">create Post</a>

          </footer>
      </div>
      <div class="content-p">
<div class="card content " style="width: 18rem;">
    <img src="<?php echo URLROOT; ?>/assets/img/pharma1.jpg" class="card-img-top" alt="img">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <a href="#" class="card-link">Localisation</a>
    <p class="card-text">Numéro de téléphone</p>

    <a href="#" class="btn btn-primary">Go somewhere</a>
    <?php var_dump($data)?>
  </div>
</div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>