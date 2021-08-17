

<body>
<nav class="navbar navbar-expand-md bg-nav navbar-dark sticky-top">
  <a class="navbar-brand" href="#">YOPHARMA</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="navb" class="navbar-collapse collapse hide">
    <ul class="nav navbar-nav ml-auto ">
      <?php if (!isset($_SESSION['role'])){ ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/ControllerCompte/insert"><span class="fas fa-user" style="color:#42B130" ></span> Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/ControllerCompte/select"><span class="fas fa-sign-in-alt"></span> Login</a>
      </li>
      <?php }else {?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/ControllerCompte/logout"><span class="fas fa-logout-in-alt"></span> Logout</a>
          </li>
      <?php } ?>
    </ul>
  </div>
</nav>
</body>