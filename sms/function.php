<?php

     
	 
	
	 function showdetail($year,$rollno)
	 {
		 include('dbcon.php');
		 
		 $sql="select *
           from student
	       where year='$year' and rollno='$rollno'";
		   
		   
		   $run=mysqli_query($con,$sql);
		   
		   if(mysqli_num_rows($run)>0)
		   {
			   
			   $data=mysqli_fetch_assoc($run);
			   ?>
      			   
		          <table border="1" align= "center" width="80%">
				      <tr>
					      <th colspan="3">Student Details</th>
					  </tr>
					  <tr>
					      <td rowspan="6"><img src="admin/dataimg/<?php echo $data['image'] ?>" style="max-height: 200px; max-width: 150px"></td>
					  </tr>
					  <tr>
					    <th>Name</th>
						<td><?php echo $data['name']; ?></td>
					  </tr>
					  
					  <tr>
					    <th>Rollno</th>
						<td><?php echo $data['rollno']; ?></td>
					  </tr>
					  <tr>
					    <th>Year</th>
						<td><?php echo $data['year']; ?></td>
					  </tr>
					  <tr>
					    <th>City</th>
						<td><?php echo $data['city']; ?></td>
					  </tr>
					  <tr>
					    <th>Mob</th>
						<td><?php echo $data['mob']; ?></td>
					  </tr>
				  
                  </table>				  
			   
			   <?php
			   
			   
		   }
		   else
		   {
			   ?>
           			     
                <script>
				   
				   alert('Not Found Record of Student');
				</script>
				 
			   <?php
		   }
		   
		   
		   
		 
		 
	 }




?>