<?php

      session_start();
      if(isset($_SESSION['uid']))
      {
	      //echo $_SESSION['uid'];
	
      }
      else
      {
	     header('location: ../login.php');
      }

?>
<?php
include('header.php');
?>
   	 <div id="div1">
	 
	      <div class="div2">
		      <h1 align= "center">Welcome to Admin Dashboard</h1>
		      <h3><a href="logout.php" style="float: right;">logout</a></h3>
		   
		  </div>
		  
		  <div class="div3">
		     <ul id="m1" align= "center" >
			    <li><a href="addstudent.php">Insert Student Details</a></li>
				<li><a href="uplatestudent.php">Update Student Details</a></li>
				<li><a href="deletedata.php">Delete Student Details</a></li>
			 </ul>
		  
		  
		  </div>
	 
	 
	 
	 </div>
	  
	  
</body>
</html>