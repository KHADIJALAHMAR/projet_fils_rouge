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
<!------ Include the above in your HEAD tag ---------->
<!-- <section>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-5 texte-center py-5
            ">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dicta molestiae architecto, maxime error exercitationem! Nam, autem deserunt, id architecto amet dolor provident totam consequatur cum perferendis dolores consequuntur sunt.
                </p>
            </div>
            <div class="col-lg-7 texte-center py5">
                <h1>Welcome back !</h1>
                <h3>we are happy to see you again</h3>
            <form  action="<?php echo URLROOT; ?>/ControllerCompte/select"   method="POST">
                <div class="form-row pt-5">
                    <div class="col-lg-10">
                        <div class="wrap-input100 validate-input">
                        <label for="">Email</label>
                        <input type="text" name="email">
                        </div>
                    </div>

                    <div class="form-row">
                    <div class="col-lg-10">
                        <div class="wrap-input100 validate-input">
                        <label for="">password</label>
                        <input type="password" name="password">

                        </div>
                    </div>
                    
                    <div class="form-row">
                    <div class="col-lg-10">
                        <input type="submit" name="submit" value="login">

                        </div>
                    </div>
                    


            </form>
            </div>
        </div>
    </div>
</section> -->
<div class=" d-flex formcontainer">
    <div class="login-child1">
        <h1>An easy way to be healtful</h1>
        <p>we are YO PHARMA</p>
        <p>we are the future of your health❤.</p>
    </div>
    <div class="">
        <form class="d-grid" action="<?php echo URLROOT; ?>/ControllerCompte/select" method="POST">
                            <label for="">Email</label>
                            <input type="text" name="email">
                            <label for="">password</label>
                            <input type="text" name="password">
                            <a href="<?php echo URLROOT; ?>/ControllerCompte/insert">signup</a>
                            <input type="submit" name="submit">  
        </form>
    </div>
</div>
 



</body>
</html>

<!-- <label for="">Email</label>
                            <input type="text" name="email">
                            <label for="">password</label>
                            <input type="text" name="password">
                            <a href="<?php echo URLROOT; ?>/ControllerCompte/insert">signup</a>
                            <input type="submit" name="submit">  
                             -->