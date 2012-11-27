<?php
	session_start();
	$_SESSION['previous']="choose";

?>
<HTML>
	<HEAD>
		<TITLE>
			Choose presentation
		</TITLE>
		<link rel="stylesheet" href="styles/s1.css">
	</HEAD>

	<BODY>
		<h3>Choose from the list of existing presentations:</h3>
		<br />
		<br />
		<?
		//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
		$query="SELECT pname FROM presentations";
		$result=mysql_query($query,$con);  

		?>
		<form id="f1" action ="http://localhost/test/scripts/options.php" method="post">
		<select name="presentation">
		<?
		while($row = mysql_fetch_array($result))
		{
		?>				
			<option><? echo $row['pname'] ?></option>
		<?
		}
		?>
		</select>
		<?
		mysql_close($con);
		//db part ends	

 
		?>
		<br />
		<br />
		<br />
		<input type="submit" name="select" value="Select">
		</form>
	</BODY>

</HTML>

