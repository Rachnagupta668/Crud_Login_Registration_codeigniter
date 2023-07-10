<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D</title>
</head>
<body>
  <h1>login to account</h1> 
  <?php $session=session(); ?>
  <?php if(!is_null($session->getFlashdata('failed_messege'))):?>
  <div>
  <?= $sesstion->getFlashdata('failed_messege');?>
  </div>
  <?Php endif ?>

  <?php $validation=\config\services::validation(); ?>

   <form method="POST" action="<?= base_url('login');?>">
   
    <label><b>User email:</b></label>
    <input type="email" name="user_email"><br><br>
    <label><b>User password:</b></label>
    <input type="password" name="user_password"><br><br>
<input  type="submit" name="login" value="login">
  </form> 
  <a href="<?=base_url()?>/insert">does not have account?</a>
</body>
</html>