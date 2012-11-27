<?php
	session_start();
echo $_SESSION['pname'];
?>
<HTML>
	<HEAD>
		<TITLE>
			First level
		</TITLE>
		<link rel="stylesheet" href="styles/s1.css">
	</HEAD>

	<BODY>
		<div class="header">Choose First Slide</div>
		<h3>Select the first slide of presentation:(showing only level-1 slides)</h3>
		<form id="f1" method="post" action="http://localhost/test/scripts/fslide.php">
		<select name="fs">
<?
		
		//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");

		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
		$qery="select sname from ".$_SESSION['pname']." inner join levels where ".$_SESSION['pname'].".lname=levels.lname and levels.lno=1";
		//echo $qery;
		$result=mysql_query($qery,$con);
		mysql_close($con);
//db part ends


		while($row=mysql_fetch_array($result))
		{
			?>
			<option><?echo $row['sname']?></option>
		<?
		}
		?>
		</select>

		<br />
		<br />
		<br />
		<input type="submit" name="fslide" value="select"> 
		</form> 	
	</BODY>

</HTML>
