<?php

session_start();

$con = mysql_connect("localhost:3306","vidhoon"and "123456");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
	

	$query="UPDATE courses SET completed=0 where cname='".$_SESSION['cname']."'";
	mysql_query($query,$con); 

	unset($_SESSION['pre']);
	unset($_SESSION['cname']);
	unset($_SESSION['pname']);
	unset($_SESSION['mname']);


header("Location:http://localhost/test/scripts/stud_options.php");
?>

