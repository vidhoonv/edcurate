<?php

session_start();
   //database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");

		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
		$query="INSERT INTO modules VALUES('".$_POST['module']."','".$_POST['number']."')";		
		mysql_query($query,$con);  
		$n=$_POST['number'];
		for($i=1;$i<=$n;$i++)
		{
		$v="t".$i;
		$qery="INSERT INTO levels VALUES('$i','".$_POST["$v"]."','".$_POST['module']."')";
		//echo $qery;
		mysql_query($qery,$con);
		}
	
		mysql_close($con);
//db part ends

/*table description

modules(name,nl)

mname	-	name of the module
nl	-	no of levels

levels(name,mod)

lname	-	name of level
mname	-	name of module to which it is related
*/

header("Location:http://localhost/test/start.html");

?>
