<?php
session_start();
$_SESSION['level']=$_POST['level'];
//echo $_SESSION['level'];
	//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

		//creating necessary files for linking content slides
		
		$query1="SELECT structure FROM presentations where pname='".$_SESSION['pname']."'";
		$result1=mysql_query($query1,$con);  

		$row=mysql_fetch_array($result1);

		if($row['structure']=="s1")
		{
			header("Location:http://localhost/test/scripts/flink1.php");
		}
		else if($row['structure']=="s2")
		{
			header("Location:http://localhost/test/scripts/flink2.php");
		}
		
		
?>

