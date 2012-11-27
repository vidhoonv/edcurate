<?php
//session part starts
session_start();

$_SESSION['pname']=$_POST['pname'];
$_SESSION['previous']="createp2";
$_SESSION['mname']=$_POST['mod'];

//echo $_SESSION['mname']; 
//echo $_SESSION['pname']; 
//session part ends

//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");

		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
		$query="CREATE TABLE ".$_POST['pname']."(sname varchar(20) primary key,cd int(2),de int(2),nde int(5),linked int(2),lname varchar(50),result varchar(2))";		
		mysql_query($query,$con);  
		$struct="s".$_POST['rb'];
		$qery="INSERT INTO presentations values('".$_POST['pname']."',0,'".$_POST['mod']."','".$struct."',0,0,' ')";
		//echo $struct;
		mysql_query($qery,$con);
		mysql_close($con);
//db part ends

//folder creation -- this folder will contain all contents of the presentation


        $old_mask = umask(0); 
	mkdir("/opt/lampp/htdocs/test/presentations/".$_POST['pname']);
	mkdir("/opt/lampp/htdocs/test/presentations/".$_POST['pname']."/scripts");
	umask($old_mask); 
	
//table explanation
/*
	sname	-	slide name			-	pk
	cd	-	content or decision slide 	- 0->content
					    		  1->decision
	de	-	type of decision element	-	0-> nothing
								1->rb
								2->cb	
	nde	-	no. of decision elements	
	linked	-	slide already linked/not linked	-	0-> not linked
								1-> linked	

	lname	- 	name of level (assessment)	
	result	-	used only for decision slides	(assessment)	 
			to indicate path taken in slide
			show				
*/
/*

	pname		-	presentation name	-	pk	
	completed	-	if it is complete/not	-	0 ->incomplete
								1->complete
		
	content		-	no. of content slides
	decision	-	no.of decision slides
	first_slide	-	first slide of presentation 
	lmodule		-	name of learning module
	structure	-	structure of levels		
*/

//redirecting to the next page- should be changed to listoftemplates page  -done
header("Location:http://localhost/test/scripts/options.php");

?>
