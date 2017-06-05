  <?php 

include('includes/connection.php');
?>
<style type="text/css" media="screen">
#form1
{
	margin-top:3px;
	margin-left:20px;
	padding:5px;
}	
</style>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Social Network</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                <li><a href="home.php">Home</a></li>
                <li><a href="member.php">Members</a></li>
                <li><a>Topics :</a></li>	
                 <?php 
                 	$get_topics="select * from topics";
                 	$run_topics=mysqli_query($con,$get_topics);
                 	while($row=mysqli_fetch_array($run_topics))
                 	{
                 		$topic_id=$row['topic_id'];
                 		$topic_name=$row['topic'];
                 		echo "<li><a href='topic.php?topic=$topic_id'>$topic_name</a></li>";
                 	}
                 ?>    
               <li>
               	
           <form class="form-inline" method="get" action="result.php" id="form1">
    <div class="form-group">
        <input type="text" name="user_query" class="form-control"  placeholder="Search a topic..">
    </div>
    <button type="submit" name="search" class="btn btn-default">Search</button>
  </form>
               </li>
                </ul>

               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

