<?php
 //database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");

		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
		$query="INSERT INTO users VALUES('".$_POST['uname']."','".$_POST['pass']."','".$_POST['type']."')";		
		mysql_query($query,$con);  

		mysql_close($con);
//db part ends

	
//db part ends

/*table description

users(uname,pword)

uname	-	handle of user
pword	-	password
*/
?>

<HTML>
	<HEAD>
		<TITLE>
				success
		</TITLE>
	</HEAD>

	<BODY>
		<form action="http://localhost/test/users/login_user.html">
			<input type="submit" name="s" value="Go to login page">
		</form>
	</BODY>

</HTML>
