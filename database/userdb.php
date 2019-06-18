<?php

  $name1=$_POST['name'];
  $emailid=$_POST['email'];
  
  $count=mysqli_connect('localhost','root','','insertdb');
  
  
   $query="INSERT INTO userdata(Name,Email) VALUES('$name1','$emailid')";

    //for run the query
	$run=mysqli_query($count,$query);
	
	
	
	if($run==1)
	{
		
		echo "data upload successfully <a href='index.php'>for more inser data</a>";
		
	}
	else
	{
		echo "\nError...";
	}
?>