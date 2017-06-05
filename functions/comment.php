
<?php
$get_id=$_GET['post_id'];
	

	$get_com="select * from comments where post_id='$get_id' ORDER by 1 DESC " or die("Error :" . mysqli_error($con));
	$run_com=mysqli_query($con,$get_com) or die("Error :" . mysqli_error($con));
	while($row=mysqli_fetch_array($run_com))
	{
		$com =$row['comment'];
		 $com_name=$row['comment_author'];
	//	$date=$row['date'];
		echo " 
<div>
<h4>Author name :$com_name</h4> <i>Said</i> on $date
<p style='border:1px black solid;'>$com</p>
</div>
		";
	}

?>
