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

<body >
  <div class="formcontainer">
    <div class="cardform">
      <form class="signupform " action="<?php echo URLROOT; ?>/ControllerCompte/insert" method="POST">
        <h1 style="color:#E8E4E6">Create account</h1>
        <input class="style-input" type="text" name="name" placeholder="name"
        <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '' ?> value="<?php echo $data['fname'] ?? '' ?>">
        <span style="color:#E8E4E6"><?php echo $data['name_err'] ?? '' ?></span>
        <input class="style-input" type="text" name="lname" placeholder="lname" <?php echo (!empty($data['lname_err'])) ? 'is-invalid' : '' ?> value="<?php echo $data['lname'] ?? '' ?>">
        <span style="color:#E8E4E6"><?php echo $data['lname_err'] ?? '' ?></span>
        <input class="style-input" type="text" name="email" placeholder="email" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?> value="<?php echo $data['email'] ?? '' ?>">
        <span style="color:#E8E4E6"><?php echo $data['email_err'] ?? '' ?></span>

        <input class="style-input" type="text" name="password" placeholder="password" <?php echo (!empty($data['pass_word_err'])) ? 'is-invalid' : '' ?> value="<?php echo $data['pass_word'] ?? '' ?>">
        <span class="danger" style="color:#E8E4E6"><?php echo $data['password_err'] ?? '' ?></span>
        <label style="color:#E8E4E6" for="cars" name="role">Choose a car:</label>
        <select class="style-input" id="cars" name="role" <?php echo (!empty($data['role_err'])) ? 'is-invalid' : '' ?> value="<?php echo $data['role'] ?? '' ?>">
          <option> pharmacist </option>
          <option> Admin </option>
        </select>

        <input class="btn-card" type="submit" name="submit" />
        <p>You already have an account?<span style="color:#42B130"><a href="<?php echo URLROOT; ?>/ControllerCompte/select">login</a></span></p>
      </form>
    </div>
  </div>
</body>

</html>