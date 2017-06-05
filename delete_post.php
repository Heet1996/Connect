
<?php
	$con = mysqli_connect("localhost","root","","social_network") ;
	global $post_id;

if(isset($_GET['post_id']))
{
$post_id=$_GET['post_id'];
$delete_post="delete from post where post_id='$post_id'";
$run_delete=mysqli_query($con,$delete_post) or die("Error :" . mysqli_error($con));
if($run_delete)
{
	echo '<script>alert("Post Deleted")</script>' ;
echo '<script>window.open("home.php","_self")</script>' ;

}
}


?>