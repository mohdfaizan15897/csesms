<?php

   $count= mysqli_connect('localhost','root','','insertdb');
   
		   
	function showdata()
	{
		global $count;
		$query="select *
           from userdata";
		   
		 $run=mysqli_query($count,$query);
		 if($run==1)
		 {
		   ?><table border="1" width="80%" align= "center">
		     <tr>
			  <td>id</td>
			  <td>Name</td>
			  <td>Email<td>
			 </tr><?php
			while($data=mysqli_fetch_assoc($run))
			{
				echo "<pre>";
			    //print_r($data);
		         ?>
				 <tr>
				    <td><?php echo $data['id'] ?></td>
					<td><?php echo $data['Name'] ?></td>
					<td><?php echo $data['Email'] ?></td>
				 </tr>
				 
				 <?php
			}
			?></table><?php
		
		 }
		 else
		 {
			 echo "Erro";
		 }
		
	}




 ?>
 
 
 <html>
    <head>
       <title>show data</title>
	</head>
	<body>
	  <?php 
	    showdata();
	  ?>  
	
	</body>
 
 
 </html>