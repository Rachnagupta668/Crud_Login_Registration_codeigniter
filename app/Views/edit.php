<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Update Form</h1> 
  <form method="POST" action="<?php echo site_url('Home/Update');?>">
  <input type="hidden" name="id" value="<?php echo $user['user_id'];?>">
    <label><b>User name:</b></label>
    <input type="text" name="user_name" value="<?php echo $user['user_name'];?>"><br><br>

    <label><b>User email:</b></label>
    <input type="email" name="user_email" value="<?php echo $user['user_email'];?>"><br><br>
    <label><b>User password:</b></label>
    <input type="password" name="user_password" value="<?php echo $user['user_password'];?>"><br><br>
<input  type="submit" name="submit" value="Update">
  </form> 
</body>
</html>