<html>
    <head>
	<title>images upload</title>
	
	</head>
	<body>
	  <form action="index.php" method="post" enctype="multipart/form-data">
	     
	    <input type="file" name="img22" required="required"></br>
		<input type="submit" name="submit">
		
	  </form>
	
	
	</body>
	
</html>
<?php
    if(isset($_POST['submit']))
	{
		$imagesname=$_FILES['img22']['name'];
		
		$tempname=$_FILES['img22']['tmp_name'];
		
		$count=mysqli_connect('localhost','root','','images');
		
		move_uploaded_file($tempname,"images/$imagesname");
		
		$sql="INSERT INTO imgfile(img) VALUES('$imagesname')";
		
		$run=mysqli_query($count,$sql);
		echo "upload success";
	}

?>
