<?php
session_start();
	$p=$_GET['t'];
	
	$con = mysql_connect("localhost:3306","vidhoon"and "123456");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

	$query="select sname from ".$_SESSION['pname']." where lname='".$p."'";
//echo $query;
	$result=mysql_query($query,$con); 
	

	

	while($row=mysql_fetch_array($result))
	{
		$dsent.=$row['sname']."|";
	}
	echo $dsent;
?>
