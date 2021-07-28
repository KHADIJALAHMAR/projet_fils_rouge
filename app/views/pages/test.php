<?php require APPROOT . '/views/inc/header.php';
 ?>
</body>

</html>

<section class="Form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters rounded ">
            <div class="col-lg-5 shadow">
                <img src="../public/img/halwa.jpg" alt="loginimg" class="img-fluid">
            </div>
            
            <div class="col-lg-7 px-5 shadow-lg p-3 mb-6  bg-white rounded">
                <div class="col-lg-12 d-flex justify-content-center py-3 ">
                    <img src="../public/img/logo.png" alt="shieldimg" class="img-fluid">
                </div>
                <form  name="myForm"  onsubmit="return validateForm()" action="<?php echo URLROOT; ?>/ControllerCompte/login" method="post">
                    <div class="form-row py-3">
                        <div class="col-lg-7">
                            <h5>
                                E-mail
                            </h5>
                            <input class="email form-control" type="email" name="email" placeholder="Your-email@mail.com" style="margin-bottom: .5rem;">
                            <div class="alert alert-danger custom-alert" style="padding: 5px 10px;margin-bottom: 5px;   display: none;">
                            The email can't be less than <strong>10</strong> carracters
                            </div>
                        </div> 
                    </div>
                    <div class="py-3">
                        <div class="col-lg-7">
                            <label for="password">
                                <h5> Password </h5>
                            </label>
                            <input type="password" name="password" placeholder="************"  class="form-control password form-control-lg" style="margin-bottom: .5rem;">
                            <div class="alert alert-danger custom-alert" style="padding: 5px 10px;margin-bottom: 5px;display: none;">
                            The password can't be less than <strong>5</strong> carracters
                            </div>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="col-lg-7">
                            <button type="submit" name="submit" class="btn btn-warning btn-lg btn-block">Login</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</section>

<div class="row text-white">
    
<form  action="<?php echo URLROOT; ?>/ControllerCompte/select" method="POST">

<!-- <label for="">Email</label>
<input type="text" name="email">
<label for="">password</label>
<input type="text" name="password">
<a href="<?php echo URLROOT; ?>/ControllerCompte/insert">signup</a>
<input type="submit" name="submit"> -->

</form>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<p>hello</p>
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
    <div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>