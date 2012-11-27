<?php
session_start();

//under cons

$fn=$_SESSION['mname']."-".$_SESSION['pname']."-".$_SESSION['uname'];
$fn="/opt/lampp/htdocs/test/presentations/".$fn.".txt"; 
$fstart="\n\n".'$fhandle=fopen("'.$fn.'",\'a\') or die("cannot open file");';
//$fstart1="\n\n".'$fhandle=fopen("'.$fn.'",\'w\') or die("cannot open file");';
$fcon=$_SESSION['level'].'\n- to -\n"';
$fend="\n".'fwrite($fhandle,"'.$fcon.');'."\n".'fclose($fhandle);'."\n";


$fcc="\n".$fstart."\n".$fend."\n";
//$fcc1="\n".$fstart1."\n".$fend."\n";


//under cons




$fname=$_POST['c1'];

$fname="/opt/lampp/htdocs/test/presentations/".$_SESSION['pname']."/scripts/".$fname.".php"; 

//creating and opening the file
	
$fhandle=fopen($fname,'w') or die("cannot open file");

$content="<?php\n\nsession_start();\n\n".$fcc."//redirecting to next page\nheader(\"Location:http://localhost/test/presentations/".$_SESSION['pname']."/".$_POST['decision'].".php\");\n\n?>";

//writing and closing the file
	fwrite($fhandle,$content);
	fclose($fhandle);
					
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

		//updating database for the slide record in table

				$qery="UPDATE ".$_SESSION['pname']." SET linked=1 where sname='".$_POST['c1']."'";
				$rust=mysql_query($qery,$con);  	

		$query1="SELECT sname,de,nde FROM ".$_SESSION['pname']." where sname='".$_POST['decision']."'";
		$result1=mysql_query($query1,$con); 
		$row1 = mysql_fetch_array($result1);

		$fname=$_POST['decision'];
		$fname="/opt/lampp/htdocs/test/presentations/".$_SESSION['pname']."/scripts/".$fname.".php";  //may need changes

		$nd=1;

		
			$fhandle=fopen($fname,'w') or die("cannot open file");
						//creating the content in variables to write into file
				//this path will need change in future 

				//selecting content according to decision element



		if($row1['de']==1)
				{ 
				$if_start="\n".'if($_POST[\'rb\']==';
				$else_start="\n".'else if($_POST[\'rb\']==';
				}
				else if($row1['de']==2)
				{
				{ 
				$if_start="\n".'if($_POST[\'cb\']==';
				$else_start="\n".'else if($_POST[\'cb\']==';
				}
				}				
				$if_end=")\n";
				$ob="\n{\n";								
				$cb="\n}\n";
				$start="<?php\n\nsession_start();".$fcc."\n\n//redirecting to next page\n\n";
				$end="\n\n?>";
				$content="";
				
				$db_connect="\n//database part starts\n\$con = mysql_connect(\"localhost:3306\",\"vidhoon\"and \"123456\");\nif (!\$con)\n{\ndie('Could not connect: ' . mysql_error());\n}\nmysql_select_db(\"cpa\", \$con) or die ('Could not connect: ' . mysql_error());" ;

				
				
				
				//generating content for file dynamically

				$content.=$start;

				$content.=$db_connect;
				
					
				while($nd<=$row1['nde'])
				{
					$n="dd".$nd;
					//echo $n."<br />";
					if($_POST["$n"]=="end")
					{
					$path="\nheader(\"Location:http://localhost/test/scripts/endofss.php\");";

					$q="UPDATE ".$_SESSION['pname']." SET result='".$_POST["$n"]."' where sname='".$_POST['decision']."'";


					}
					else
					{
					$path="\nheader(\"Location:http://localhost/test/presentations/".$_SESSION['pname']."/". $_POST["$n"].".php\");";

					$q="UPDATE ".$_SESSION['pname']." SET result='".$_POST["$n"]."' where sname='".$_POST['decision']."'";


					}
					if($nd==1)
					{
						$content.=$if_start;
						
					}
					else
					{
						$content.=$else_start;
						
					}
					$db_query="\nmysql_query(\"".$q."\",\$con);\n";
					
					$content.=$nd;
					$content.=$if_end;
					$content.=$ob;
					$content.=$path;
					
					$content.=$db_query;

					$content.=$cb;						
					$count++;
					$nd++;

				}	
				$content.=$end;
				//writing and closing the file
				fwrite($fhandle,$content);
				fclose($fhandle);
			
				$qery1="UPDATE ".$_SESSION['pname']." SET linked=1 where lname='".$_SESSION['level']."'";
				$rust1=mysql_query($qery1,$con);  		

?>
<HTML>
	<HEAD>
		<TITLE>
		</TITLE>
		<link rel="stylesheet" href="styles/s1.css">
	</HEAD>

	<BODY>
			<div class="header">Linking success</div>
			<form id="f1" action="link1.php">
			linking complete!!!
			<br />
			<br />
			<input type="submit" name="s" value="Go back">
			</form>
	</BODY>

</HTML>
