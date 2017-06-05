<?php
$query="select * from post";
$run_query=mysqli_query($con,$query);
//count the total records
$total_count=mysqli_num_rows($run_query);
//number of pages
$total_pages=ceil($total_count/$per_page);

echo "
<hr style='height:3px;'>
<center>
<ul>
<li style='display:inline;margin:10px;color:black;'><a href='home.php?page=1'>First Page</a></li>  

";
for($i=1;$i<=$total_pages;$i++)
{
echo"<li style='display:inline;margin:10px;color:black;'><a href='topic.php?page=$i'>$i</a></li>";
}
echo "

<li style='display:inline;margin:10px;color:black;'><a href='topic.php?page=$total_pages'>Last Page</a></li>
</ul>
</center>
";

?>