<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Registration Form</h1> 
  <?php $validation=\config\services::validation(); ?>
  <form method="POST" action="<?php echo site_url('Home/insert');?>">
    <label><b>User name:</b></label>
    <input type="text" name="user_name" value="<?=old('user_name')?>" required><br><br>
    <div>
    <?= $validation->getError("user_name")?>
  </div>

    <label><b>User email:</b></label>
    <input type="email" name="user_email" value="<?=old('user_email')?>" required><br><br>
    <div>
    <?= $validation->getError("user_email")?>
  </div>

    <label><b>User password:</b></label>
    <input type="password" name="user_password" value="<?=old('user_password')?>" required><br><br>
    <div>
    <?= $validation->getError("user_password")?>
  </div>

<input  type="submit" name="submit" value="Insert">
  </form> 
  <a href="<?=base_url()?>/login">Alerady have accont?</a>

</body>
</html>