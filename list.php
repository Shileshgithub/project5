
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <title>STUDENT DETAILS</title>
         </head>
         <body>
    

                 <div class="container" style="panding-toop:10px">
                 <h3> View Student details</h3>
                 <hr>
                 <div class="row">
                 <table class="table table-bordered">
                 <tr class="bg-info ">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                 </tr>
                <?php if(!empty($users)){
                    foreach ($users as $user){?>
                    <tr>
                    <td><?=$user['user_id']?></td>
                    <td><?=$user['name']?></td>
                    <td><?=$user['email']?></td>
                    <td>
                        <a href="<?php echo base_url().'index.php/user/edit'.$user['user_id']?>"class="btn btn-primary">Edit</a>
                        <a href="<?php echo base_url().'index.php/user/delete'.$user['user_id']?>"class="btn btn-primary">Delete</a>
                    </td>
                </tr>
                <?php }}else{?>
                <tr>
                    <td>NO Record found</td>
                </tr>
                <?php } ?>
            </table>
  
         </div>
                 
                    

</body>
</html>
                 
                    