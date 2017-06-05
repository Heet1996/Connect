<?php 



   
 $get_receiver="select * from users where user_id='$msg_receiver' ORDER by 1 DESC" ;
         $run_receiver=mysqli_query($con,$get_receiver);
         $row_sender=mysqli_fetch_array($run_receiver);
         $receiver_name=$row_sender['user_name'];


               
            

         ?>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Sent To</th>
        <th>Subject</th>
        <th>Date</th>
      <th>See Reply</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php  echo "<td><a href='user_profile.php?u_id=$msg_receiver'>
          $sender_name 
           
        </a></td> "; ?>
     <?php echo"<td><a href='my_messages.php?msg_id=$msg_id'> $msg_sub </a></td>
        ";?>
        <td><?php echo $msg_date ;?></td>
        <?php echo "<td><a href='my_messages.php?msg_id=$msg_id' target='self'>See Reply</a></td>
      ";?>
      </tr>
      
      
  
  </tbody>
  </table>
         

         




   