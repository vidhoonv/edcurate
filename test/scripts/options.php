<?php
//session part

session_start();
//if previous page was choose.php
if($_SESSION['previous']=="choose")
{
	echo "here";
	$_SESSION['pname']=$_POST['presentation'];
	
	$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
		
		$q="SELECT lmodule FROM presentations where pname='".$_SESSION['pname']."'";
		$r=mysql_query($q,$con);
		$row=mysql_fetch_array($r);
		
		$_SESSION['mname']=$row['lmodule'];


}


echo $_SESSION['pname']."/".$_SESSION['mname'];
//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
		$query="SELECT * FROM ".$_SESSION['pname'];
		$result=mysql_query($query,$con);
		$row=mysql_num_rows($result);  
		
		
		
			if($row==0)
				$vis="hidden";
			else
				$vis="visible";

		$query="SELECT completed FROM presentations where pname='".$_SESSION['pname']."'";
		$result=mysql_query($query,$con);
		$row=mysql_fetch_array($result);
	//	echo $row['completed'];
		
		if($row['completed']==0)
		{
			$vlink="hidden";
		}
		else
			$vlink="visible";  
				
				mysql_close($con);
//db part ends	

?>
<html>
<head>
<title>
		options
</title>

	<script type="text/javascript">
	
		function cr()
		{
			f1cpy=document.getElementById("f1");
			f1cpy.action="lot.php";
			f1cpy.submit();
		}
		function lk()
		{
			f1cpy=document.getElementById("f1");
			f1cpy.action="getfslide.php";
			f1cpy.submit();
		}
		
		function qt()
		{
			f1cpy=document.getElementById("f1");
			f1cpy.action="http://localhost/test/start.html"; //before this session should be closed in seperate php
			f1cpy.submit();
		}
		function ss()
		{
			
			f1cpy=document.getElementById("f1");
			f1cpy.action="slideshow.php";
			f1cpy.submit();			
		}	
		function dt()
		{
			
			f1cpy=document.getElementById("f1");
			f1cpy.action="delete.php";
			f1cpy.submit();			
		}
	</script>
	<link rel="stylesheet" href="styles/s1.css">
</head>
<body>
	<div class="header">Choose an option:</div>
	<br />
	<br />
	<br />
	<div align="center">
	<form id="f1" action="" method="post">
		<input type="submit" name="link" value="link slides" style="visibility:<?echo $vis?>" onClick="lk()">
		<br />
		<br />	
		<input type="submit" name="create_slide" value="Create slide" onClick="cr()">
		<br />
		<br />	
		<input type="submit" name="slide_show" value="Run slide show"  style="visibility:<?echo $vlink?>" onClick="ss()">
		<br />
		<br />
		<input type="submit" name="delete" value="Delete presentation" onClick="dt()">		
		<br />
		<br />
		<input type="submit" name="quit" value="Quit presentation" onClick="qt()">		
	</form>
	</div>
</body>
</html>
