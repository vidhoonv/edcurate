<?php

session_start();

if($_SESSION['pre']=="stud_opt")
{
	$_SESSION['pname']=$_POST['pname'];
	$_SESSION['cname']=$_POST['cname'];
}
else
{
}

	$status;
	$message;
	$vis;
	$con = mysql_connect("localhost:3306","vidhoon"and "123456");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
	
	$query="SELECT mname,pname FROM courses where cname='".$_SESSION['cname']."' and completed=0 order by priority";
	//echo $query;
	$result1=mysql_query($query,$con);

	$c1=mysql_num_rows($result1);
	

	$query="SELECT mname,pname FROM courses where cname='".$_SESSION['cname']."' order by priority";

	$result2=mysql_query($query,$con);

	$c2=mysql_num_rows($result2);	
	if($c1==$c2)
	{
		$status="start learning";
	
		$row=mysql_fetch_array($result1);

		$_SESSION['pname']=$row['pname'];
		$_SESSION['mname']=$row['mname'];
		
		$message="Begin the course";
		$vis="visible";
	
}
	else if($c1==0)
	{
		$status="End";
		$message="you have finished this course";

		$query="UPDATE courses SET completed=0 where cname='".$_SESSION['cname']."'";
		mysql_query($query,$con); 

		$vis="hidden";

	}
	else
	{
		$status="continue learning";
		$message="continue the course";

		
	
		$row=mysql_fetch_array($result1);

		$_SESSION['pname']=$row['pname'];
		$_SESSION['mname']=$row['mname'];
		
		

		$vis="visible";
		
	}
	//echo $c1.$c2.$message.$status;
	
?>

<HTML>
	<HEAD>
		<TITLE>
			choose page for students
		</TITLE>
			<link rel="stylesheet" href="styles/s1.css">
		<script type="text/javascript">
		
		function p1()
		{
			
			f1cpy=document.getElementById("f1");
			f1cpy.action="slideshow.php";
			f1cpy.submit();			
		}	
		function p2()
		{
			
			f1cpy=document.getElementById("f1");
			f1cpy.action="back.php";
			f1cpy.submit();			
		}
		</script>
	</HEAD>

	<BODY>
			<div class="header">Topics:</div>



			<div class="subtitle">
			<p><?echo $message?></p>
			<ul>The list of topics you will learn under this course are:

			<?
				while($row1=mysql_fetch_array($result2))
				{
					?>
					

				<li><?echo $row1['pname']."/".$row1['pname']?></li>
			<?
				}					

					

			?>
			<form id="f1" action="" method="post">	
	
			</ul>			
			</div>
			
			<br />
			<br />
			
			<input type="submit" name="s" value="<?echo $status?>" onClick="p1()" style="visibility:<?echo $vis?>">

			<input type="submit" name="g" value="Go back" onClick="p2()">			
			</form>
	</BODY>

</HTML>
