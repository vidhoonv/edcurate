<?php

session_start();

?>
<HTML>
	<HEAD>
		<TITLE>
				Create presentation
		</TITLE>
		<link rel="stylesheet" href="styles/s1.css">
	</HEAD>

	<BODY>
			<div class="header">Create New Presentation</div>
		<form action="http://localhost/test/scripts/createp2.php" method="post">
		Enter presentation name:<br />
		<br />
		<input type="text" name="pname" value="">
		<br />
		<br />
		Choose the learning module for presentation:(from the list available)<br /><br />
		<select name="mod">
<?		
		//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");

		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

		$qery="SELECT mname from modules";
	
		$result=mysql_query($qery,$con);

		while($row=mysql_fetch_array($result))
		{
?>
			<option><?echo $row['mname']?></option>
<?
		}
		mysql_close($con);
?>
		</select>
		<br />
		<br />

		Choose a structure for each level in the module:<br /><br />
		<input type="radio" name="rb" value="1"><img src="http://localhost/test/structs/s1.jpg" height="200" width="200" style="border: 1px solid"><br />
		<br />
		<input type="radio" name="rb" value="2"><img src="http://localhost/test/structs/s2.jpg" height="200" width="200" style="border: 1px solid"><br />
		<br />		
		<input type="submit" name="createp" value="Create">
		</form>
	</BODY>

</HTML>
