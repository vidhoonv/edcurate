<?php
session_start();

//$_SESSION['utype']="author";
?>

<HTML>
	<HEAD>
		<TITLE>
			Custom Presentation Application
		</TITLE>

		<SCRIPT type="text/javascript">
			function cr()
			{
				//document.write("preview");
				f1cpy=document.getElementById("f1");
				
				f1cpy.action="createp.php";  //may need changes
				f1cpy.submit();    
				//return true;
			}
			
			function op()
			{
				//document.write("create");

				f1cpy=document.getElementById("f1");

				f1cpy.action="choose.php";  //may need changes
				f1cpy.submit();
				//return true;    
			}
			function am()
			{
				f1cpy=document.getElementById("f1");

				f1cpy.action="http://localhost/test/modules/define.html";  //may need changes
				f1cpy.submit();
			}
		</SCRIPT>
	</HEAD>

	<BODY>
		<h1>Custom Presentation Application</h1>
		<br />
		<br />
		<br />
		<div align="center">
		Choose an option:
		<br />
		<br />
		<form id="f1" action="" method="post">
		<input type="submit" name="create" value="Create New Presentation" onClick="cr()">
		<br /> <br />
		<input type="submit" name="open" value="Open Existing Presentation" onClick="op()">  
		<!br />
		<br /> <br />
		<input type="submit" name="addm" value="Add module" onClick="am()">  
		</form>
		</div>		
	</BODY>

</HTML>
