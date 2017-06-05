<?php
$con=mysqli_connect("localhost","root","","social_network") or die("connection was not established");

?>
  <h2>View Users</h2>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        
        <th>Gender</th>
    
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    <?php

    $sel_users="select * from users ORDER by 1 DESC";
    $run_user=mysqli_query($con,$sel_users);
$i=0;
   while($row_fetch=mysqli_fetch_array($run_user))
   { 

    $user_id=$row_fetch['user_id'];
    $user_name=$row_fetch['user_name'];
    $user_email=$row_fetch['user_email'];
    $user_gender=$row_fetch['user_gender'];
        $user_image=$row_fetch['user_image'];
    
     ?> <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $user_name; ?></td>
        <td><?php echo $user_email; ?></td>
        <td><?php echo $user_gender; ?></td>

               
        <td><a href="index.php?view_users&delete">Delete</a></td>
        <td><a href="index.php?view_users&edit">Edit</a></td>
      
      </tr>
      
      <?php 
    $i++;
    
    }
      
if(isset($_GET['delete']))
    {
      $delete="delete from users where user_id='$user_id'";
      $run_delete=mysqli_query($con,$delete);
$delete_post="delete from post where user_id='$user_id'";
  $post_delete=mysqli_query($con,$delete_post);
      if($run_delete&&$post_delete)
      {
        echo "<script>alert('User Deleted');</script>";
        echo "<script> window.open('view_users.php','_self')</script>" ;
      }
    }
      ?>
    </tbody>
  </table>

