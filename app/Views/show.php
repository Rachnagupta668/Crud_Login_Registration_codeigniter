<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List of Registerd User</h2>
    <table border="1px" cellpadding="2px" cellspacing="2px">
        <tr>
            <th>user id</th>
            <th>user name</th>
            <th>user email</th>
            <th>user password</th>

            <th>delete</th>
            <th>edit</th>



        </tr>
        <?php foreach($users as $user){ 
             
            ?>
            <tr>
                <td><?php echo $user['user_id'];?></td>
                <td><?php echo $user['user_name'];?></td>
                <td><?php echo $user['user_email'];?></td>
                <td><?php echo $user['user_password'];?></td>
               <td><a href="<?php echo base_url();?>/Home/delete/<?php echo $user['user_id'];?>">Delete</a></td>
               <td><a href="<?php echo base_url();?>/Home/edit/<?php echo $user['user_id'];?>">edit</a></td>

            
            </tr>
      <?php      }?>
    </table>
</body>
</html>