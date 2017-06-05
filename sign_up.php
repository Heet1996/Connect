
<?php
include("includes/connection.php");
if(isset($_POST['sign_up']))
{	
	$name = mysqli_real_escape_string($con,$_POST['u_name']);
	$pass = mysqli_real_escape_string($con,$_POST['u_pass']);
	$email = mysqli_real_escape_string($con,$_POST['u_email']);
	$bod = mysqli_real_escape_string($con,$_POST['u_date']);
	$gender = mysqli_real_escape_string($con,$_POST['u_gender']);
	$date = date("Y-m-d");
	
	$status = "unverified";
	$posts = "No";
	$get_email = "SELECT * FROM users WHERE user_email='$email'";
	$run_email = mysqli_query($con,$get_email);
	$check = mysqli_num_rows($run_email);
	if($check==1)
	{
		echo "<script>alert('Email Already Exist')</script>";
		exit();
	}
	if(strlen($pass)<8)
	{
		echo "<script>alert('Password lenght must be atleast 8 character long')</script>";
		exit();
	}
	else
	{
		$insert = "INSERT INTO users 
				(user_name,user_pass,user_email,user_gender,user_b_day,user_image,register_date,last_login,status,posts) 
					VALUES ('$name','$pass','$email','$gender','$bod','images.png','$date','$date','$status','$posts')";
		$run=mysqli_query($con,$insert)or die(mysqli_error($con)) ;
		if($run)
		{ $_SESSION['user_email']=$email;
	echo "<script> alert('Registration Successful')</script>";
	echo "<script> window.open('topicofinterest.php','_self')</script>";
		}
	}

}
?>