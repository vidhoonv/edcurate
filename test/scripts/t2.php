<?
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>edit template-2</title>
	<script type="text/javascript" src="fckeditor/fckeditor.js"></script>
	<script type="text/javascript">
			function up()
			{
				document.f1.action="upload.php";  //may need changes
				document.f1.submit();
				
			}
			function sk()
			{
				document.f1.action="t2_slave2.php";   //this probably doesnt need changes
				document.f1.submit();
			}
	</script>
	<link rel="stylesheet" href="styles/s1.css">
</head>

<body>
		<table border="3" bordercolor="black">
			<tr height="500">
				<td valign="top" width="800"><div class="header">provide information here:</div><br><br />
				
				<div class="subtitle"> The slide contains the following elements:</div>
				
				<ul>
					<li>title text</li>
					<li>picture -- needs content upload</li>
					<li>outline text</li>
				</ul>
				<form name="f1"  method="post" action="" enctype="multipart/form-data">
				<div class="subtitle"> Step 1: Choose the picture to upload -> </div>
				<ul>
					
					<li>picture source<br />
						<input type="file" name="pic_source" /> <br />
						<br />	
						<input type="submit" name="pic_upload" value="upload" onClick="up()">
						<input type="submit" name="skip" value="select from already available pictures" onClick="sk()">
					</li>
					<br />
				
				</ul>
				
				
					
				</form>	

				</td>
					
				
			</tr>
		<table>
</body>
</html>
