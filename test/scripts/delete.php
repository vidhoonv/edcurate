<?php

session_start();
//this php file has code to delete a presentation

		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

				
		$query="SELECT sname FROM ".$_SESSION['pname'];
		$result=mysql_query($query,$con);
		

		while($row=mysql_fetch_array($result))
		{
			$fna="/opt/lampp/htdocs/test/presentations/".$_SESSION['pname']."/".$row['sname'].".php";
			unlink($fna);
			$fna="/opt/lampp/htdocs/test/presentations/".$_SESSION['pname']."/scripts/".$row['sname'].".php";
			unlink($fna);		
		}
			
		$fna="/opt/lampp/htdocs/test/presentations/".$_SESSION['pname']."/"."/scripts";
			
		rmdir($fna);
		
		$fna="/opt/lampp/htdocs/test/presentations/".$_SESSION['pname'];
			
		rmdir($fna);

		$query="DELETE FROM presentations where pname='".$_SESSION['pname']."'";
		mysql_query($query,$con);

		//echo $query;
		$query="DROP TABLE ".$_SESSION['pname'];  
		mysql_query($query,$con);

		//echo $query;
		mysql_close($con);

//needs rmdir() part		

		
?>

<HTML>
	<HEAD>
		<TITLE>
		</TITLE>
		<link rel="stylesheet" href="styles/s1.css">
	</HEAD>

	<BODY>
			The presentation was successfully deleted!<br/><br/>
			<form action="http://localhost/test/start.html">
			Click here to go main menu:<br/><br/>
			<input type="submit" name="go" value="Go">
			</form>

	</BODY>

</HTML>
