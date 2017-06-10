<?php session_start() ?>
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
    <title>Topics</title>

</head>

<style>
.form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span {
    width: 20px;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
    display: inline-block;   
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: none;   
}
</style>
<body>
<div class="container">
<form method="post">
    <div class="row">

    <div class="col-xs-12 col-sm-12">

        <center><h3>Select your topic</h3></center>
        <hr />
       <div class="row">
        <div class="col-md-2 col-md-offset-3">
        <div class="form-group ">
            <input type="checkbox" name="top" id="data-structure" autocomplete="off" />
            <div class="btn-group row">
                <label for="data-structure" class="btn btn-default">
                    <span class="glyphicon glyphicon-ok"></span>
                    <span> </span>
                </label>
                <label for="data-structure" class="btn btn-default active">
                    Data Structures
                </label>
            </div>

        </div>
        </div>
        <div class="col-md-2">
        <div class="form-group ">
            <input type="checkbox" name="top" id="operating-system" autocomplete="off" />
            <div class="btn-group row">
                <label for="operating-system" class="btn btn-default">
                    <span class="glyphicon glyphicon-ok"></span>
                    <span> </span>
                </label>
                <label for="operating-system" class="btn btn-default">
                    Operating System
                </label>
            </div>
          </div>
        </div>
        <div class="col-md-2">
        <div class="form-group ">
            <input type="checkbox" name="top" id="android" autocomplete="off" />
            <div class="btn-group row">
                <label for="android" class="btn btn-default">
                    <span class="glyphicon glyphicon-ok"></span>
                    <span> </span>
                </label>
                <label for="android" class="btn btn-default">
                    Android
                </label>
            </div>
          </div>
        </div>
        
        </div>
       <!-- <div class="row">
        <div class="col-md-2 col-md-offset-3">
        <div class="form-group ">
            <input type="checkbox" name="data-structure" id="data-structure" autocomplete="off" />
            <div class="btn-group row">
                <label for="data-structure" class="btn btn-default">
                    <span class="glyphicon glyphicon-ok"></span>
                    <span> </span>
                </label>
                <label for="data-structure" class="btn btn-default active">
                    Data Structures
                </label>
            </div>

        </div>
        </div>
        <div class="col-md-2">
        <div class="form-group ">
            <input type="checkbox" name="operating-system" id="operating-system" autocomplete="off" />
            <div class="btn-group row">
                <label for="operating-system" class="btn btn-default">
                    <span class="glyphicon glyphicon-ok"></span>
                    <span> </span>
                </label>
                <label for="operating-system" class="btn btn-default">
                    Operating System
                </label>
            </div>
          </div>
        </div>
        <div class="col-md-2">
        <div class="form-group ">
            <input type="checkbox" name="android" id="android" autocomplete="off" />
            <div class="btn-group row">
                <label for="android" class="btn btn-default">
                    <span class="glyphicon glyphicon-ok"></span>
                    <span> </span>
                </label>
                <label for="android" class="btn btn-default">
                    Android
                </label>
            </div>
          </div>
        </div>
        
        </div>

       </div> 
        
        
    </div>
-->
    <div class="row">
      
        <center>
            
            <button class="btn btn-success" name="topicofinterest">Submit</button>
           
        </center>
    </div>
    </form>
<?php 
            
           if(isset($_POST['topicofinterest']))
           {
           //echo "<script> window.open('home.php','_self')</script>";
           $email=$_SESSION['user_email'];
           $topic=mysqli_real_escape_string($con,$_POST['top']);
           $insert="Insert into users(topicofinterest) values('$topic') where user_email='$email'";
           $run=mysqli_query($con,$insert) or die(mysqli_error($con));
           
           }
            ?>
    
</div>
</body>
</html>

