<?php

//session part
session_start();
echo $_SESSION['pname'];
?>
<HTML>
	<HEAD>
		<TITLE>	this page displays the list of templates for the user to select from it
		</TITLE>
		<link rel="stylesheet" href="styles/s1.css">
	</HEAD>

	<BODY>

		<div class="header">
		Select Template
		</div>	
		<br>
		<hr>	
		<br>	

		<div class="content">

		<h2>template1</h2><br>
		<a href="http://localhost/test/scripts/t1.php">
			<img src="http://localhost/test/templates/t1.jpg" height="250" width="250"><br>
		</a>

		<h2>template2</h2><br>
		<a href="http://localhost/test/scripts/t2.php">
			<img src="http://localhost/test/templates/t2.jpg" height="250" width="250"><br>
		</a>

		<h2>template3</h2><br>
		<a href="http://localhost/test/scripts/t3.php">
			<img src="http://localhost/test/templates/t1.jpg" height="250" width="250"><br>
		</a>
		
		<h2>template4</h2><br>
		<a href="http://localhost/test/scripts/t4.php">		<!change link -- just temperory> 
			<img src="http://localhost/test/templates/t4.jpg" height="250" width="250"><br>
		</a>	

		
		<h2>template5</h2><br>
		<a href="http://localhost/test/scripts/t5.php">		<!change link -- just temperory> 
			<img src="http://localhost/test/templates/t5.jpg" height="250" width="250"><br>
		</a>	

	</div>
	</BODY>

</HTML>
