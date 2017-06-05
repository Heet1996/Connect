<style type="text/css" media="screen">
li
{
	list-style: none;
}
	
</style>
<?php
$con = mysqli_connect("localhost","root","","social_network") ;
//function for getting topic
function getTopic()
{	global $con;
	$get_topics="select * from topics";
                 	$run_topics=mysqli_query($con,$get_topics);
                 	while($row=mysqli_fetch_array($run_topics))
                 	{
                 		$topic_id=$row['topic_id'];
                 		$topic_name=$row['topic'];
                 		echo "<option value='$topic_id'>$topic_name</option>";
                 	}
}
//function for inserting post
function insertPost()
{global $con;
	global $user_id;

	if(isset($_POST['putpost']))
	{
		$title=addcslashes($_POST['title'],'A....Z') and addcslashes($_POST['title'],'a....z');
		$comment=addcslashes($_POST['comment'],'A....Z') and addcslashes($_POST['comment'],'a....z');
	
		$topic=$_POST['topic'];
			if($comment=='')
		{
			echo "<center><h2>Please Enter Some Content</h2><center>";
			exit();
		}
		else{
		$insert="INSERT INTO post(user_id,topic_id,post_content, post_time, post_title) VALUES ('$user_id','$topic','$comment',NOW(),'$title')";
		$run=mysqli_query($con,$insert);
			if($run)
			{
				echo('<script>alert("INSERT")</script>');
				$update="update users set posts='YES' where user_id='$user_id' ";
				$run_update=mysqli_query($con,$update);
				
			}
	}
	}

}
//function for displaying post
function displayPost()
{
	global $con;

	$per_page=5;
	if(isset($_GET['page']))
	{
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	$start_from=($page-1)* $per_page;
	$get_posts="select * from post ORDER by 1 DESC LIMIT $start_from, $per_page ";
	$run_posts=mysqli_query($con,$get_posts);

	while($row_posts=mysqli_fetch_array($run_posts))
	{
		$post_id=$row_posts['post_id'];
		$user_id=$row_posts['user_id'];
		$post_title=$row_posts['post_title'];
		$content=$row_posts['post_content'];

		$date=$row_posts['post_time'];
//getting the user who has posted the thread
		$user="select * from users where user_id='$user_id' and posts='YES' ";
		$run_user=mysqli_query($con,$user);
		$row_user=mysqli_fetch_array($run_user);
		$user_name=$row_user['user_name'] ;
		$user_image=$row_user['user_image'];
		//now displaying all at once
		echo "
		<div class='container'>
		<div class='row' id='post'>
			<div class='col-md-12'>
			<div class='row'>
			<div class='col-md-2'>
			<p><img style='vertical-align:center;margin-top:5vh;border:1px black solid;' src='user/user_images/$user_image' width='100' height='100'></p>
			</div>
			<div class='col-md-8'>
			<div class='row'>
			
			<h3><a href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
			<h5>$post_title</h5>
			<p>$date</p>
			</div>
			<div class='row'>
			<p>$content</p>
			</div> 
			</div>		
			</div>
			<hr>
		<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-default' >See Replies or Reply To this</button></a> 

			</div>		
			</div>	
			</div>

			";
	}
include('pagination.php');
}

function single_post()
{global $con;
	global $user_id;
	if(isset($_GET['post_id']))
{
$get_id=$_GET['post_id'];
	

	$get_posts="select * from post where post_id='$get_id' ";
	$run_posts=mysqli_query($con,$get_posts);

	$row_posts=mysqli_fetch_array($run_posts);
	
		$post_id=$row_posts['post_id'];
		$user_id=$row_posts['user_id'];
		$post_title=$row_posts['post_title'];
		$content=$row_posts['post_content'];

		$date=$row_posts['post_time'];
//getting the user who has posted the thread
		$user="select * from users where user_id='$user_id' and posts='YES' ";
		$run_user=mysqli_query($con,$user);
		$row_user=mysqli_fetch_array($run_user);
		$user_name=$row_user['user_name'] ;
		$user_image=$row_user['user_image'];
		//now displaying all at once
		
		echo "				
		<div class='container'>
		<div class='row' id='post'>
			<div class='col-md-12'>
			<div class='row'>
			<div class='col-md-2'>
			<p><img style='vertical-align:center;margin-top:2vh;border:1px black solid;' src='user/user_images/$user_image' width='100' height='100'></p>
			</div>
			<div class='col-md-8'>
			<div class='row' style='margin-left:3vh;'>
			
			<h3><a href='user_profile.php?u_id=$user_id'>$user_name</a></h3>

			<h5>$post_title</h5>
			<p>$date</p>
			</div>
			<div class='row' style='margin-left:3vh;border:1px black solid;'>
			<p>$content</p>
			</div> 
			</div>		
			</div>
	

			</div>		
			</div>	
			<br>

	" ;
include("comment.php");                                 
 
	echo "<form action='' method='post' id='post'> 
    
    <div class='form-group'>
      <label >Comment:</label>
     
    <textarea name='comment' placeholder='Add Your Reply Here....' class='form-control' rows='5'></textarea>
    </div>
     
    <button name='reply' type='submit' class='btn btn-default'>Reply</button>
  </form>
				</div>	";

if(isset($_POST['reply']))
{ 	
	$comment= $_POST['comment'];

$inserts = "INSERT INTO comments(user_id,post_id,comment,comment_author) VALUES('$user_id','$post_id','$comment','$user_name') ";
	$run = mysqli_query($con,$inserts) or die("Error " . mysqli_error($con)); 

	echo "<h2>Your Reply was Added</h2>";
}
}

}
//function for getting Categories

function get_Cats()
{

	global $con;

	$per_page=5;
	if(isset($_GET['page']))
	{
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	$start_from=($page-1)* $per_page;
	if(isset($_GET['topic']))
	{
	$topic_id=$_GET['topic'];

	}
$get_posts="select * from post where topic_id='$topic_id' ORDER by 1 DESC LIMIT $start_from, $per_page "; 
	$run_posts=mysqli_query($con,$get_posts) or die("Error :" . mysqli_error($con));

	

	while($row_posts=mysqli_fetch_array($run_posts))
	{
		$post_id=$row_posts['post_id'];
		$user_id=$row_posts['user_id'];
		$post_title=$row_posts['post_title'];
		$content=$row_posts['post_content'];

		$date=$row_posts['post_time'];
//getting the user who has posted the thread
		$user="select * from users where user_id='$user_id' and posts='YES' " or die("Error :" . mysqli_error($con));
		$run_user=mysqli_query($con,$user);
		$row_user=mysqli_fetch_array($run_user);
		$user_name=$row_user['user_name'] ;
		$user_image=$row_user['user_image'];
		//now displaying all at once
		echo "
		
		<div class='container'>
		<div class='row' id='post'>
			<div class='col-md-12'>
			<div class='row'>
			<div class='col-md-2'>
			<p><img style='vertical-align:center;margin-top:5vh;border:1px black solid;' src='user/user_images/$user_image' width='100' height='100'></p>
			</div>
			<div class='col-md-8'>
			<div class='row'>
			
			<h3><a href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
			<h5>$post_title</h5>
			<p>$date</p>
			</div>
			<div class='row'>
			<p>$content</p>
			</div> 
			</div>		
			</div>
			<hr>
		<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-default' >See Replies or Reply To this</button></a> 

			</div>		
			</div>	
			</div>

			";
	}
include('pagination.php');
}
//function for search
function getResult()
{
	global $con;

	
	if(isset($_GET['user_query']))
	{
	$search_id=$_GET['user_query'];

	}
$get_posts="select * from post where post_title LIKE '%$search_id%'"; 
	$run_posts=mysqli_query($con,$get_posts) or die("Error :" . mysqli_error($con));
	$count_result= mysqli_num_rows($run_posts);
	
	if($count_result==0)
	{
		echo "<h2>No Search Found.....</h2>" ;
		exit();
	}
else{
	while($row_posts=mysqli_fetch_array($run_posts))
	{
		$post_id=$row_posts['post_id'];
		$user_id=$row_posts['user_id'];
		$post_title=$row_posts['post_title'];
		$content=$row_posts['post_content'];

		$date=$row_posts['post_time'];
//getting the user who has posted the thread
		$user="select * from users where user_id='$user_id' and posts='YES' " or die("Error :" . mysqli_error($con));
		$run_user=mysqli_query($con,$user);
		$row_user=mysqli_fetch_array($run_user);
		$user_name=$row_user['user_name'] ;
		$user_image=$row_user['user_image'];
		//now displaying all at once
		echo "
		<div class='container'>
		<div class='row' id='post'>
			<div class='col-md-12'>
			<div class='row'>
			<div class='col-md-2'>
			<p><img style='vertical-align:center;margin-top:5vh;border:1px black solid;' src='user/user_images/$user_image' width='100' height='100'></p>
			</div>
			<div class='col-md-8 col-md-offset-2'>
			<div class='row'>
			
			<h3><a href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
			<h5>$post_title</h5>
			<p>$date</p>
			</div>
			<div class='row'>
			<p>$content</p>
			</div> 
			</div>		
			</div>
			<hr>
		<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-default' >See Replies or Reply To this</button></a> 

			</div>		
			</div>	
			</div>

			";
	}
}

}
function user_post()
{
	global $con;
	global $user_id;

	$per_page=5;
	if(isset($_GET['page']))
	{
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	$start_from=($page-1)* $per_page;
	$get_posts="select * from post where user_id='$user_id' ORDER by 1 DESC LIMIT $start_from, $per_page " ;
	$run_posts=mysqli_query($con,$get_posts);

	while($row_posts=mysqli_fetch_array($run_posts))
	{
		$post_id=$row_posts['post_id'];
		$user_id=$row_posts['user_id'];
		$post_title=$row_posts['post_title'];
		$content=$row_posts['post_content'];

		$date=$row_posts['post_time'];
//getting the user who has posted the thread
		$user="select * from users where user_id='$user_id' and posts='YES' ";
		$run_user=mysqli_query($con,$user);
		$row_user=mysqli_fetch_array($run_user);
		$user_name=$row_user['user_name'] ;
		$user_image=$row_user['user_image'];
		//now displaying all at once
		echo "
		<div class='container'>
		<div class='row' id='post'>
			<div class='col-md-12'>
			<div class='row'>
			<div class='col-md-2'>
			<p><img style='vertical-align:center;margin-top:5vh;border:1px black solid;' src='user/user_images/$user_image' width='100' height='100'></p>
			</div>
			<div class='col-md-8 col-md-offset-2'>
			<div class='row'>
			
			<h3><a href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
			<h5>$post_title</h5>
			<p>$date</p>
			</div>
			<div class='row'>
			<p>$content</p>
			</div> 
			</div>		
			</div>
			<hr>
		<a href='delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-default' >Delete</button></a> 
		<a href='edit_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-default' >Edit</button></a> 
		<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-default' >View</button></a> 

			</div>		
			</div>	
			</div>

			";
	}
include('pagination.php');
include('delete_post.php');

}
function user_profile()
{global $con;
if(isset($_GET['u_id']))
{
	$user_id=$_GET['u_id'];
	$get_user="select * from users where user_id='$user_id'";
                     $run_user=mysqli_query($con,$get_user) or die(mysql_error());
                     $row=mysqli_fetch_array($run_user) or die(mysql_error());
                     $id=$row['user_id'];
                     $name=$row['user_name'];
                     $email=$row['user_email'];
                     $gender=$row['user_gender'];
                     $b_day=$row['user_b_day'];
                     $image=$row['user_image'];
                     $register=$row['register_date'];
                     $last=$row['last_login'];
                    
                    
                    	$message='Send a message';
                    
                    
                    echo "
				<div id='profile'>
				<center style='border-bottom:1px solid black;'><img src='user/user_images/$image' width='200' height='200' style='margin-bottom:20px;'></center><br>
<div class='row'>
	<div class='col-md-6' style='border-right:1px solid black;'>
				<p><strong>Name :</strong>$name</p><br>
	

				<p><strong>Gender :</strong>$gender</p><br>
				<p><strong>Last Seen :</strong>$last</p><br>
				<p><strong>Member Since :</strong>$register</p><br>
				<a href='message.php?u_id=$id'><button>$message</button></a>
				</div>
	<div class='col-md-6'>
	<h5>Other Member:</h5>";
	  $get_members="select * from users";
                     $run_member=mysqli_query($con,$get_members) ;
                     $count=0;
                    echo "<div class='row'>" ;
                      while(($row=mysqli_fetch_array($run_member)) && $count<=3)
                     {


                     $user_id=$row['user_id'];
                     $user_name=$row['user_name'];
                     $user_image=$row['user_image'];
                     echo"
                    
                    <div class='col-md-6'>
                    <a href='user_profile.php?u_id=$user_id'>
                     
                     
                     <ul>
                     <li>
                     <img class='img-responsive' style='margin-top:4vh;' width='70' height='70' src='user/user_images/$user_image' title='$user_name'>
                     </li>
                     </ul>
                     
                     </a>
</div>
                     
                     
                     
                     
                     "
                     
                     
                     
                     ;$count++;}
                     echo "</div>
	</div>
				
				</div>

</div>

                    ";



}


}
function single_message()
{	global $con;
	global $sender_name;

	if(isset($_GET['msg_id']))
	{
		$msg_id=$_GET['msg_id'];
		$sel_msg="select * from messages where msg_id='$msg_id'";
		$run_msg=mysqli_query($con,$sel_msg);
		$row=mysqli_fetch_array($run_msg);
		$msg_sub=$row['msg_sub'];
		$msg_topic=$row['msg_topic'];
		$msg_reply=$row['reply'];
		//$update_read="update messages set status='read' where msg_id='$msg_id'" or die("Error". mysqli_error($con));
	//	$run=mysqli_query($con,$update_read);

		echo " <hr><hr>";
		echo"<h3>" ;echo $msg_sub ;echo " </h3> ";
		echo "<p>Message : $msg_topic</p> 

<p>My Reply : $msg_reply</p>


		";
echo "
		<form action='' method='post'>
			<textarea rows='5' cols='36' name='reply_content'> </textarea>
	<br><br>	<button type='submit' name='reply' class='btn btn-primary btn-sm'>Reply To This</button>
		

		</form>

";


if(isset($_POST['reply']))
{
$reply_content=$_POST['reply_content'];

if($msg_reply!='no_reply')
{
	echo "<h3>Message was already Reply</h3>" ;
	exit();
}
else
{	$get="update messages set reply='$reply_content' where msg_id='$msg_id' " or die("Error:" .mysqli_error($con));
$run=mysqli_query($con,$get);	
	echo "<h3>Message sent</h3>";
}
}


	}

}


?>
