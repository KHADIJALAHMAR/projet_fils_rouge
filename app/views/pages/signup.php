<?php include_once APPROOT . '/views/inc/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css ?>">
    <title>login</title>
</head>
<body>
    <div class="formcontainer">
        <div class="cardform">
        <form  class="signupform " action="<?php echo URLROOT; ?>/ControllerCompte/insert" method="POST">
        <h1>Create account</h1>
        <input   class="style-input" type="text" name="name" placeholder="name" >
        <input  class="style-input" type="text" name="lname"  placeholder="lname">
        <input  class="style-input" type="text" name="email"  placeholder="email">
        <input  class="style-input" type="text" name="password"  placeholder="password">
        <label  style="color:#E8E4E6" for="cars" name="role">Choose a car:</label>
<select class="style-input" id="cars" name="role">
  <option > client </option>
  <option> pharmasy </option>
</select>

<input  class="btn-card" type="submit" name="submit"  />
<p style="color:#E8E4E6">You already have an account? <span style="color:#42B130"><a>Login</a></span></p>
        </form>
        </div>
    </div>
</body>
</html>