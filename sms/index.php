<!DOCTYPE HTML>

<html lang="en_US">
   <head>
     <title>
	   student management system
	 </title>
   
   
   </head>
   <body>
      
	  <h1 align= "center">Student Management System</h1>
	  <h3 align="right" style="margin-right: 20px;"><a href="login.php">Admin Login</a></h3>
      
	  <form action="index.php" method="post">
	     <table align= "center" border="1" width="50%">
	       <tr>
		      <td colspan="2" align= "center">Student Info</td>
		   </tr>
		   <tr>
		      <td>Choose Year</td>
			  <td>
			      <select name="year" required>
				    <option>--select--</option>
				    <option value="1">1st</option>
				    <option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
				  </select>
			  </td>
		   
		   </tr>
		   <tr>
		       <td>Enter roll no</td>
			   <td><input type="text" name="rollno"></td>
		   </tr>
	       <tr>
		      <td colspan="2" align= "center"><input type="submit" name="submit"><></td>
		   </tr>
	  
	     </table>
	   </form>
   
   </body>
   
 </html>
 
 <?php
 
   if(isset($_POST['submit']))
	{ 
	   include('dbcon.php');
       $year=$_POST['year'];
	   $rollno=$_POST['rollno'];
	
  	
       include('function.php');
	  showdetail($year,$rollno);
     
	}
?> 
 
   