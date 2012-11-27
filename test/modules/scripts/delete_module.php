<?php
session_start();
?>
<HTML>
	<HEAD>
		<TITLE> delete module page
		</TITLE>

	<link rel="stylesheet" href="styles/s1.css">
	</HEAD>

	<BODY>
		<div class="header">Delete Module</div><br/><br/>
		WARNING:<br/>
Deleting a module will remove all related presentations!!!<br/><br/>
		<form action="del.php" method="post">
		<div class="subtitle">
		Choose the module to delete:
		</div>
		<br />
		<br />
		<select name="mn">
<?
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

	
			$query2="SELECT mname FROM modules";
			
			$result2=mysql_query($query2,$con);  
			
		while($row2=mysql_fetch_array($result2))
		{
?>
		<option><? echo $row2['mname']?></option>
<?
		}
?>
		</select>
		<br/>
		<br/>
		<input type="submit" name="go" value="Delete">
		</form>
	</BODY>

</HTML>

