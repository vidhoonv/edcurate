<?php

//this php file is to retrive the presentation in which the user is working and redirect to the first slide of the presentation to start slide show
session_start();

//creating report file

$fn="/opt/lampp/htdocs/test/presentations/".$_SESSION['mname']."-".$_SESSION['pname']."-".$_SESSION['uname'].".txt";



$fhandle=fopen($fn,'w') or die("cannot open file");
//end of file part

//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		$sn=$_SESSION['pname'];
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
		$query="SELECT first_slide from presentations where pname='".$_SESSION['pname']."'";
		//echo $query;
		$result=mysql_query($query,$con);  

		$row=mysql_fetch_array($result);
		
		$fname="http://localhost/test/presentations/".$_SESSION['pname']."/".$row['first_slide'].".php";
		//echo $fname;
		//redirecting to the presentaion's first slide -- will need change after mkdir()
		header("Location:".$fname);

	


		$query="UPDATE courses SET completed=1 where pname='".$_SESSION['pname']."' and mname='".$_SESSION['mname']."'";

		mysql_query($query,$con); 

 //db part ends
		mysql_close($con);
?>

<HTML>
	<HEAD>
		<TITLE>
			
		</TITLE>
	</HEAD>

	<BODY>
	</BODY>

</HTML>
