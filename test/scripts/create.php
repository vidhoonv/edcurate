<?php
//session part
session_start();


	//forming the nameof file	
	$fname=$_POST["slide_name"];
	$fname="/opt/lampp/htdocs/test/presentations/".$_SESSION['pname']."/".$fname.".php";  //may need changes


	//creating and opening the file
	
	$fhandle=fopen($fname,'w') or die("cannot open file");

	//creating the content in variables to write into file

	$php_part="<?php\n\nsession_start();\n\n?>";

	$style_part="<style type=\"text/css\">\nbody {\nbackground-color: #FFFFCC;\nfont-family: Arial, Helvetica, sans-serif;\nfont-size: 12px;\n	line-height: 24px;\ncolor: #333333;\n}\n.title {\nfont-family: Georgia, \"Times New Roman\", Times, serif;\nfont-size: 18px;\n	line-height: 30px; color: #000000;\n	border-color: #CCCCCC #333333 #333333 #CCCCCC;\nborder-width: 2px;\n  border-style: dotted;\ntext-align:center;\nfont-weight:bold;\n}\n.subtitle {\nfont-family: Georgia, \"Times New Roman\", Times, serif;\nfont-size: 16px;\nline-height: 20px;\nfont-weight: bold;\n color: #660000;\nfont-style: oblique;\nborder-width: 2px;\nborder-color: #CCCCCC #333333 #333333 #CCCCCC; \nborder-style: dotted;\n}\n.header {\nfont-family: Georgia,\"Times New Roman\", Times, serif;font-size: 24px;background-color: #990000;\n  color: #FFFF66;\n} \n</style>";
	
	
	$head_part="<html>\n<head>\n<title>".$_POST["slide_name"]."\n</title>\n".$style_part."</head>";

	$next_part="<input type=\"submit\" name=\"next_slide\" value=\"Next\">";

	$body_part="\n<body>\n<form id=\"f1\" action=\"scripts/".$_POST['slide_name'].".php\" method=\"post\">\n"."<div class=\"header\" >".$_POST['FCKeditor1']."\n</div>\n<br>\n<div class=\"subtitle\"  > \n".$_POST['FCKeditor2']."\n</div>\n<br><br><br>\n".$next_part."</form>\n</body>\n</html>";	

	fwrite($fhandle,$php_part);
	fwrite($fhandle,$head_part);
	fwrite($fhandle,$body_part);


	fclose($fhandle);
	
//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		$sn=$_POST['slide_name'];
		$mn=$_POST['ll'];
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
		$query="INSERT INTO ".$_SESSION['pname']." VALUES('$sn',0,0,0,0,'$mn',' ')";
		$row=mysql_query($query,$con);  

		mysql_close($con);
//db part ends	

unset($_SESSION['previous']);
?>	
<HTML>
<HEAD>
<TITLE>
	Success
</TITLE>
<link rel="stylesheet" href="styles/s1.css">
</HEAD>
<BODY>
		The slide was successfully created under the presentation : <?echo $_SESSION['pname']?><br /><br />
		<form id="f1" action="http://localhost/test/scripts/options.php" method="post">
		<input type="submit" name="ok" value="ok">		
		</form>
</BODY>
</HTML>		
