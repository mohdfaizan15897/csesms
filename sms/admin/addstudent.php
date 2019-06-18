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
include('titlehead.php');
?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">

     <table align="center">
	    <tr>
		  <td>Roll No.</td>
		  <td><input type="text" name="rollno" placeholder="Enter Roll No." required></td>
		</tr>
		<tr>
		  <td>Student Name</td>
		  <td><input type="text" name="name" placeholder="Enter Student name" required></td>
		</tr>
		<tr>
		  <td>City</td>
		  <td><input type="text" name="city" placeholder="Enter City" required></td>
		</tr>
		<tr>
		  <td>Mob.</td>
		  <td><input type="text" name="mob" placeholder="Enter Mobile No." required></td>
		</tr>
		<tr>
		  <td>Branch</td>
		  <td><input type="text" name="branch" placeholder="Enter Branch" required></td>
		</tr>
		<tr>
		  <td>Year</td>
		  <td><input type="text" name="year" placeholder="Enter year of student" required></td>
		</tr>
		<tr>
		  <td>Image</td>
		  <td><input type="file" name="img" ></td>
		</tr>
		<tr>
		  <td colspan="2" align= "center"><input type="submit" name="submit" required></td>
		</tr>
	 
	 </table>


</form>
</body>
</html>
<?php

  if(isset($_POST['submit']))
  {
     $con=mysqli_connect('localhost','id8614699_sms','mFaizan@123','id8614699_sms');
	 
	 $rlno=$_POST['rollno'];
	 $name=$_POST['name'];
	 $city=$_POST['city'];
	 $mob=$_POST['mob'];
	 $branch=$_POST['branch'];
	 $yr=$_POST['year'];
	 
	 $imagename=$_FILES['img']['name'];
	 $tempname=$_FILES['img']['tmp_name'];
	 
	 move_uploaded_file($tempname,"dataimg/$imagename");
	 
	 

     $sql="INSERT INTO student(rollno,name,city,mob,branch,year,image) 
	 VALUES('$rlno','$name','$city','$mob','$branch','$yr','$imagename')";

		   
		    $run=mysqli_query($con,$sql);
		   
		   if($run == 1 or $run=="")
		   {
			   
			   ?>
			   
			   <script>
			     alert('data inserted successfully');
			   </script>
			   
			   
			   <?php
		   }
		   
  }   
?>