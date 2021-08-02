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


	<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>