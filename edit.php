<?php 
   session_start();
   include('includes/connection.php');
   include('functions/function.php');
   if(!isset($_SESSION['user_email']))
   {
      header("location: index.php");
   }
   else
   {
   ?>
<!DOCTYPE html>
<html>
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Theme CSS -->
   <link href="css/freelancer.css" rel="stylesheet">
   <!-- Custom Fonts -->
   <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
   <head>
      <title>Welcome <?php echo $_SESSION['user_email'] ;?></title>
   </head>
   <style>
      .contents
      {
      background-color: #4c5a68;
      height:100vh; 
      }
      #user_timeline
      {background-color:white;
      border:2px solid black;
      height:100vh;
      }
      #post_style
      {
        border:1px black solid;
        margin:10px;
      }
      hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
}
   </style>
   <body>
      <?php include('home_header.php'); ?>
      <div class="container contents">
         <div class="row">
            <div class="col-md-3 col-lg-offset-1" id="user_timeline">
               <div id="user_details">
                  <?php
                     $user=$_SESSION['user_email'];
                  
                     $get_user="select * from users where user_email='$user'";
                     $run_user=mysqli_query($con,$get_user) or die(mysql_error());
                     $row=mysqli_fetch_array($run_user) or die(mysql_error());
                     $user_id=$row['user_id'];
                     $user_pass=$row['user_pass'];
                     $user_name=$row['user_name'];
                     $user_email=$row['user_email'];
                     $user_gender=$row['user_gender'];
                     $user_b_day=$row['user_b_day'];
                     $user_image=$row['user_image'];
                     $user_register=$row['register_date'];
                     $user_last=$row['last_login'];
                                                              $get_user_post="select * from post where user_id='$user_id'";
                     $run_user_post=mysqli_query($con,$get_user_post);
                     $count=mysqli_num_rows($run_user_post);
                   $sel_msg="select * from messages where receiver='$user_id' AND status='unread' ORDER BY 1 DESC";
            $run=mysqli_query($con,$sel_msg) OR die("ERROR :".mysqli_error($con));
            $count_msg=mysqli_num_rows($run);
                     echo"
                     <div class='row'>
                     <div class='col-md-12'>
                     <p>
                     <center><img class='img-responsive' style='margin-top:10vh;' width='200' height='200' src='user/user_images/$user_image'></center>
                     </p>
                     </div>
                     </div>
                     <hr style='color:black;'>
                     <div class='row'>
                     <div class='col-md-12 '>
                     <h5 style='margin:3vh 2vh 2vh 2vh;'>Name :$user_name</h5>
                     </div>
                     </div>
                     
                     
                     <div class='row'>
                     <div class='col-md-12 '>
                     <h5 style='margin:2vh;'>Member Since:$user_register</h5>
                     </div>
                     </div>
                     <div class='row'>
                     <div class='col-md-12 '>
                     <h5 style='margin:2vh;'>Last Login :$user_last</h5>
                     </div>
                     </div>
                     <div class='row'>
                     <div class='col-md-12 '>
                     <a style='margin:2vh;font-size:1.3em;text-decoration:none;' href='my_messages.php?u_id=$user_id'>Messages ($count_msg):</a>
                     </div>
                     </div>
                     <div class='row'>
                     <div class='col-md-12 '>
                     <a style='margin:2vh;font-size:1.3em;text-decoration:none;' href='posts.php?u_id=$user_id'>Posts ($count):</a>
                     </div>
                     </div>
                     <div class='row'>
                     <div class='col-md-12 '>
           <a style='margin:2vh;font-size:1.3em;text-decoration:none;' href='edit.php?u_id=$user_id'>Edit my Account :</a>
                     </div>
                     </div>
                     <div class='row'>
                     <div class='col-md-12 '>
                     <a style='margin:2vh;font-size:1.3em;text-decoration:none;' href='logout.php'>Logout</a>
                     </div>
                     </div>
                     "
                     
                     
                     
                     ;
                     ?>
               </div>
            </div>
            <div class="col-md-6 col-lg-offset-1" id="content_timeline">
               
               <div class="row">
                  <div class="col-md-12">
               <br><br><br>
                     <form name="signup" action="" method="post" enctype="multipart/form-data">
                     
                     <h2>Edit Your Profile :</h2>
                     <br><br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                
                                <input type="text" name="u_name" class="form-control" value="<?php echo $user_name ;?>" id="name" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                
                                <input type="text" name="u_pass" value="<?php echo $user_pass ;?>" class="form-control"  id="email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input name="u_email" type="email" class="form-control" value="<?php echo $user_email ;?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-6 floating-label-form-group controls">
                               <input name="u_date" type="date" disabled='disabled' class="form-control" value="<?php echo $user_b_day ;?>" >
                            </div>
                             <div class="col-xs-6 form-group floating-label-form-group controls" >
                               <input name="u_date" type="text" disabled='disabled' class="form-control" value="<?php echo $user_gender ;?>" >
                              
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input name="u_image" type="file" class="form-control" value="<?php echo $user_image ;?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button name="update" type="submit" class="btn btn-success btn-md">Update</button>
                            </div>
                        </div>
                    </form>
<?php
if(isset($_POST['update']))
{
   $u_name=$_POST['u_name'];
   $u_email=$_POST['u_email'];
      $u_pass=$_POST['u_pass'];
         $u_image=$_FILES['u_image']['name'];
         $img_tmp=$_FILES['u_image']['tmp_name'];
         move_uploaded_file($img_tmp,"user/user_images/$u_image");
       $update="update users set user_email='$u_email',user_pass='$u_pass',user_name='$u_name',user_image='$u_image' where user_id='$user_id'";
         
         $run=mysqli_query($con,$update);
         if($run==1) 
            {echo "<h2>Successfully Updated</h2>";
echo "<script>window.open('home.php','_self')</script>";

}
}
?>
                  </div>
               </div>
               
            </div>
         </div>
      </div>

                        
              <?php } ?>

   </body>
   <script src="vendor/jquery/jquery.min.js"></script>
   <!-- Bootstrap Core JavaScript -->
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Plugin JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   <!-- Contact Form JavaScript -->
   <script src="js/jqBootstrapValidation.js"></script>
   <!-- Theme JavaScript -->
   <script src="js/freelancer.min.js"></script>
</html>
