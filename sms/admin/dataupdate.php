<?php

      $con=mysqli_connect('localhost','root','','sms');
	 
	 $rlno=$_POST['rollno'];
	 $name=$_POST['name'];
	 $city=$_POST['city'];
	 $mob=$_POST['mob'];
	 $branch=$_POST['branch'];
	 $id=$_POST['sid'];
	 $yr=$_POST['year'];
	 
	 $imagename=$_FILES['img']['name'];
	 $tempname=$_FILES['img']['tmp_name'];
	 
	 move_uploaded_file($tempname,"dataimg/$imagename");
	 
	 

     $sql="update student set rollno='$rlno',name='$name',city='$city',mob='$mob'
	 ,branch='$branch',id='$id',year='$yr',image='$imagename';";

		   
		    $run=mysqli_query($con,$sql);
		   
		   if($run == 1 or $run=="")
		   {
			   
			   ?>
			   
			   <script>
			     alert('data inserted successfully');
				 window.open("edit.php?sid=<?php echo $id; ?>",'_self');
			   </script>
			   
			   
			   <?php
		   }
		   
     


?>