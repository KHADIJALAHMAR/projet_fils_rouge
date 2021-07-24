<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form  action="<?php echo URLROOT; ?>/ControllerCompte/add_post" method="POST">
        <label for="">name</label>
        <input type="text" name="name" >
        <label for="">lname</label>
        <input type="text" name="lname">
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">password</label>
        <input type="text" name="password">
        <label for="cars">Choose a car:</label>
<select name="cars" name="role" id="cars">
  <option value="volvo" >client</option>
  <option value="saab">pharmasy</option>
</select>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>