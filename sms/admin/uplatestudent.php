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


<form method="post" action="uplatestudent.php" enctype="multipart/form-data">

     <table align="center">
	    <tr>
		  <td>Student year</td>
		  <td><input type="text" name="year" placeholder="Enter Student year" required></td>
		</tr>
		<tr>
		  <td>Student Name</td>
		  <td><input type="text" name="name" placeholder="Enter Student name" required></td>
		</tr>
		<tr>
		  <td colspan="2" align= "center"><input type="submit" name="submit" value="Search" required></td>
		</tr>
		
	  </table>
	  
</form>
<table align= "center" border="1" width="80%" style="background-color: khaki; color: black;">

    <tr>
	
	   <th>No</th>
	   <th>image</th>
	   <th>Name</th>
	   <th>Branch</th>
	   <th>Rollno</th>
	   <th>Edit</th>
	
	</tr>
	
    <?php
	    
  
       if(isset($_POST['submit']))
       {
	     include('../dbcon.php');
	  
	      $name=$_POST['name'];
	      $yr=$_POST['year'];
	    
	      $sql="select *
           from student
	       where year='$yr' and name like '%$name%'";
		   
		   //echo $sql;
	    
	      $run=mysqli_query($con,$sql);
		  
		  $check=mysqli_num_rows($run);
		  //echo $check;
	   
	       if($check<1)
	       {
			   
		      echo "<tr><td colspan='5'>NO Record Found</td></td>";
	       }
           else
		   {
			   $count=0;
			   while($data=mysqli_fetch_assoc($run))
			   {
				   $count++;
				   ?>
				   
				   <tr>
	
	                   <td><?php echo $count; ?></th>
	                   <td><img src="dataimg/<?php echo $data['image']; ?>" ></td>
	                   <td><?php echo $data['name']; ?></td>
					   <td><?php echo $data['branch']; ?></td>
	                   <td><?php echo $data['rollno']; ?></td>
					   <td><a href="edit.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
	
	                </tr>
				   <?php
				   
			   }
			   
		   }

         	   
        }
	
	
	
	?>


</table>
