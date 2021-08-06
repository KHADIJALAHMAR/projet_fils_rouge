<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <link rel="stylesheet" href="../../../public/css/style.css">

        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/jquery-3.4.1.min.js"></script> 
<script src="<?php echo URLROOT; ?>/js/main.js"></script> 
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class=" d-flex justify-content-around formcontainer">
    <div class="login-child1">
        <h1>An easy way to be healtful</h1>
        <h3>we are YO PHARMA</h3>
        <h3>we are the future of your health❤.</h3>
    </div>
    <div class="card-login">
        <form class="d-grid" action="<?php echo URLROOT; ?>/ControllerCompte/select" method="POST">
            <h1 style="color:#E8E4E6">Welcome back !</h1>
            <p style="color:#42B130">we are happy to see you again</p>
              <input  class="style-input"type="text" name="email" placeholder="Email"
               <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?> value="<?php echo $data['email'] ?? '' ?>">
               <span style="color:#E8E4E6"><?php echo $data['email_err'] ?? '' ?></span>
               <input type="text" name="fname" <?php echo (!empty($data['fname_err'])) ? 'is-invalid' : '' ?> value="<?php echo $data['fname'] ?? '' ?>" >
               <span style="color:#E8E4E6"><?php echo $data['fname_err'] ?? '' ?></span>
              <input   class="style-input" type="text" name="password" placeholder="password" <?php echo (!empty($data['pass_word_err'])) ? 'is-invalid' : '' ?> value="<?php echo $data['pass_word'] ?? '' ?>">
              <span style="color:#E8E4E6"><?php echo $data['pass_word_err'] ?? '' ?></span>
              <input  class="btn-card"type="submit" name="submit"> 
              <p>You don't have an account?<span style="color:#42B130"><a href="<?php echo URLROOT; ?>/ControllerCompte/insert">Create an account</a></span></p>
        </form>
    </div>
</div>
 



</body>
</html>