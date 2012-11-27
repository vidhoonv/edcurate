<?php 
	session_start();
		

//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");

		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

		$qery="UPDATE presentations SET first_slide='".$_POST['fs']."' where pname='".$_SESSION['pname']."'";
		//echo $qery;
		mysql_query($qery,$con);
		mysql_close($con);
//db part ends

//redirecting to link page
header("Location:http://localhost/test/scripts/link1.php");

?>


