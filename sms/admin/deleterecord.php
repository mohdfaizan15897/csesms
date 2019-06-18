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

<h1 align= "center">Please Confirm to delete the record</h1>
<form method="post" align= "center" action="dele.php">
    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
    <input type="submit" name="submit" value="confirm">

</form>
