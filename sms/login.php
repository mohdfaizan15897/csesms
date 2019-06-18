<?php

  session_start();
  if(isset($_SESSION['uid']))
  {
	  header('location:admin/admindash.php');
  }


?>


<!DOCTYPE HTML>

<html lang="en_US">
   <head>
     <title>
	   login admin
	 </title>
   
   
   </head>
   <body>
      
	  <h1 align= "center">Admin Login</h1>
	  
	  <form action="login.php" method="post">
	     <table align= "center" width="50%">
	   
		   <tr>
		       <td>User Name</td>
			   <td><input type="text" name="username" required></td>
		   </tr>
		   <tr>
		       <td>Password</td>
			   <td><input type="password" name="pass" required></td>
		   </tr>
		   
	       <tr>
		      <td colspan="2" align= "center"><input type="submit" name="login" value="log in"></td>
		   </tr>
	  
	     </table>
	   </form>
   
   </body>
 </html>
 <?php
    include('dbcon.php');
	
	
	if(isset($_POST['login']))
	{
		
		$username=$_POST['username'];
	    $password=$_POST['pass'];
		
		$sql="select *
              from admin 
			  where username='$username' and password='$password'";
			  
         $run=mysqli_query($con,$sql);
         
         $num=mysqli_num_rows($run);
		 
         if($num <1)
		 {
			 ?>
			 <script>
			   alert('username or password not matched !!');
			   window.open('login.php','_self');
			 </script>
			 <?php
		 }
         else
		 {
			 
			 $data=mysqli_fetch_assoc($run);
			 
			 $id=$data['id'];
			 //echo "id= ".$id;
			  
	          $_SESSION['uid']=$id;
	          header('location:admin/admindash.php');
		 }			 
		
	}
	
 
 ?>
   