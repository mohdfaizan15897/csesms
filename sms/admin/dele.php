<?php
    $sid=$_GET['sid'];
    include('../dbcon.php');
   if(isset($_POST['submit']))
   {
	  
	   
       $sql="DELETE FROM student WHERE id='$sid'";
	   
	   
	   $run=mysqli_query($con,$sql);
	   
          if($run == 1 or $run=="")
		   {
			   
			   ?>
			   
			   <script>
			     alert('data inserted successfully');
				 window.open("deletedata.php",'_self');
			   </script>
			   
			   
			   <?php
		   }
   }
		   
   
 ?>