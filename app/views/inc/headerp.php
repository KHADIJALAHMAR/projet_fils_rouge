<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPage</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- styl css -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css ?>">
    <!-- boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Yo pharma</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted" href="#">Accueille</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pharmacies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
      </ul>
      </div>
      <ul class="nav navbar-nav ml-auto ">
        <li  class="nav-item">
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "pharmacist"): ?>
        <a class="nav-link  text-muted"  href="<?php echo URLROOT; ?>/ControllerPharma/set_pharma"><span class="fas fa-user" style="color:#42B130" ></span> Profile</a>
        <?php endif; ?>
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "Admin"): ?>
        <a class="nav-link  text-muted"  href="<?php echo URLROOT; ?>/ControllerAdmin/index"><span class="fas fa-user" style="color:#42B130" ></span>Dashboard</a>
        <?php endif; ?>
        </li>
        <?php if(isset($_SESSION['role']) ) : ?>
        <a class="nav-link  text-muted"  href="<?php echo URLROOT; ?>/ControllerAdmin/logout">logout</a>
        <?php endif; ?>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('<?php echo URLROOT; ?>/assets/img/imggard.png');
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <!-- <div class="text-white">
          <h1 class="mb-3">Heading</h1>
          <h4 class="mb-3">Subheading</h4>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button"
            >Call to action</a
          > -->
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</header>
