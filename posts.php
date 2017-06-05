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
                  
                     $get_user="select * from users where user_email='$user'" ;
                     $run_user=mysqli_query($con,$get_user) or die(mysqli_error($con));
                     $row=mysqli_fetch_array($run_user) ;
                     $user_id=$row['user_id'];
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
                     <div class='col-md-12'>
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
                        <div class="row">
                           <div class="col-md-12">
                              <br><br>
                              <h2>Your Post !</h2>
                           </div>
                        </div>
                        <br>
                        
                     <?php user_post() ;?>
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
