<?php

session_start();

$con = mysql_connect("localhost:3306","vidhoon"and "123456");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
$i=1;
while($i<=$_POST['no'])
{
$n1="d".$i;	
$n2="p".$i;	

$query="INSERT INTO courses values('".$_POST['cn']."','".$_POST["$n1"]."','".$_POST["$n2"]."',".$i.")";

$i++;
//echo $query;
mysql_query($query,$con);	

}


header("Location:http://localhost/test/start.html");

?>
