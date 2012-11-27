<?php
session_start();
	$con = mysql_connect("localhost:3306","vidhoon"and "123456");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
	
	$query="SELECT uname,pword FROM users where type='".$_POST['rb']."'";
	$result=mysql_query($query,$con);
	//echo $query;
	$flag=0;
	while($row=mysql_fetch_array($result))
	{
		//echo $row['uname']; 
		if($_POST['uname']==$row['uname'])
		{
			if($_POST['pword']==$row['pword'])
			{
			  	$_SESSION['uname']=$_POST['uname'];
				$_SESSION['utype']=$_POST['rb'];  
				$flag=2;
				//redirecting to next page

				if($_POST['rb']=="author")
				{
				//	echo $_SESSION['utype'];
					header("Location:http://localhost/test/start.html");
				}
				else if($_POST['rb']=="student")
				{
					header("Location:http://localhost/test/scripts/stud_options.php");
				}
				else
				{
					echo "there is no way that yu come here";
				}
			}
			else
			{	$flag=1;
				echo "invalid password";
			}
		}

	}
		if($flag==0)
		echo "invalid username";	
	
	

?>

<HTML>
	<HEAD>
		<TITLE>
		</TITLE>
	</HEAD>

	<BODY>
	</BODY>

</HTML>
