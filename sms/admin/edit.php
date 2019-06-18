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
include('../dbcon.php');

 $sid=$_GET['sid'];
 $sql="select * from student
      where id='$sid'";
 $run=mysqli_query($con,$sql);
 
 
 $data=mysqli_fetch_assoc($run);
       


?>
<form method="post" action="dataupdate.php" enctype="multipart/form-data">

     <table align="center">
	    <tr>
		  <td>Roll No.</td>
		  <td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
		</tr>
		<tr>
		  <td>Student Name</td>
		  <td><input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
		</tr>
		<tr>
		  <td>City</td>
		  <td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
		</tr>
		<tr>
		  <td>Mob.</td>
		  <td><input type="text" name="mob" value=<?php echo $data['mob']; ?> required></td>
		</tr>
		<tr>
		  <td>Branch</td>
		  <td><input type="text" name="branch" value=<?php echo $data['branch']; ?> required></td>
		</tr>
		<tr>
		  <td>Year</td>
		  <td><input type="text" name="year" value=<?php echo $data['year']; ?> required></td>
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