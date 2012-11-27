<?php
session_start();




		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

		$query="SELECT * FROM ".$_SESSION['pname'];
		$result=mysql_query($query,$con); 


		$c1=mysql_num_rows($result);


		$query="SELECT * FROM ".$_SESSION['pname']." where linked=1";
		$result=mysql_query($query,$con); 

		$c2=mysql_num_rows($result);

		if($c1==$c2)
		{
			$query="UPDATE presentations SET completed=1 where pname='".$_SESSION['pname']."'";
			$result=mysql_query($query,$con); 
			unset($_SESSION['previous']);
			header("Location:http://localhost/test/scripts/options.php");

		}
		else
		{
			
			$query="SELECT * FROM ".$_SESSION['pname']." where linked=0";
			$result=mysql_query($query,$con); 
?>
<html>
<head>
<title>
</title>
<link rel="stylesheet" href="styles/s1.css">
</head>
<body>
			<br />
			<br />
			The slides of following levels have not been linked:
			<br />
			<br />
			<ul>
<?
			while($row=mysql_fetch_array($result))
			{
?>
			<li><? echo $row['lname'] ?></li>
<?		

			}
?>
			<form action="link1.php">
				<input type="submit" name="s" value="Go back">
			</form>
<?			
		}
?>

			
</body>
</html>
