<?php
	session_start();
?>
<HTML>
	<HEAD>
		<TITLE>
			deletion step-2
		</TITLE>
	</HEAD>

	<BODY>

<?
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

	
			$query2="SELECT pname from presentations where lmodule='".$_POST['mn']."'";
			
			$result2=mysql_query($query2,$con);  
			
			$c=mysql_num_rows($result2);
			if($c==0)
			{
				$query="DELETE FROM modules where mname='".$_POST['mn']."'";
				mysql_query($query,$con);

			}
			else
			{
				while($row=mysql_fetch_array($result2))
				{
					$query="DELETE FROM presentations where pname='".$row['pname']."'";
					mysql_query($query,$con);	
					
					$query1="DROP TABLE ".$row['pname'];
					mysql_query($query1,$con);	
										
				}


				$query="DELETE FROM levels where mname='".$_POST['mn']."'";
				mysql_query($query,$con);
				
				$query="DELETE FROM modules where mname='".$_POST['mn']."'";
				mysql_query($query,$con);
				
			}
?>

	<form action="/test/start.html">
		Deletion successful!!!<br/><br/>
		<input type="submit" value="Main menu">
	</form>
	</BODY>

</HTML>
