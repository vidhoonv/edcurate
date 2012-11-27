<?php
		session_start();

	$con = mysql_connect("localhost:3306","vidhoon"and "123456");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
	
		$p=$_GET['q'];
		
		$query="SELECT pname from presentations where lmodule='".$p."'"; 

		$result=mysql_query($query,$con);

		$pns='';
		while($row=mysql_fetch_array($result))
		{
			$pns.=$row['pname']."|";
		}
		echo $pns;


?>
