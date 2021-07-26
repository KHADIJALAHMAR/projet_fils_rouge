<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form  action="<?php echo URLROOT; ?>/ControllerCompte/insert" method="POST">
        <label for="">name</label>
        <input type="text" name="name" >
        <label for="">lname</label>
        <input type="text" name="lname">
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">password</label>
        <input type="text" name="password">
        <label for="cars" name="role">Choose a car:</label>
<select id="cars" name="role">
  <option  >client</option>
  <option >pharmasy</option></option>
</select>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>