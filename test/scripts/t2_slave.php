<?php
session_start();
include_once("fckeditor/fckeditor.php") ;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>edit template-2</title>
	
	<script type="text/javascript">
		function pview()
			{
				//document.write("preview");
				document.f1.action="preview2.php";  //may need changes
				document.f1.submit();    
				//return true;
			}
			
			function cr()
			{
				//document.write("create");
				document.f1.action="create2.php";  //may need changes
				document.f1.submit();
				//return true;  
			}
	</script>
		<link rel="stylesheet" href="styles/s1.css">
</head>

<body>
		<table border="3" bordercolor="black">
			<tr height="500">
				<td valign="top" width="800"><div class="header"> provide information here: </div><br>
				<br />
				<div class="subtitle"> The slide contains the following elements:</div>
				<ul>
					<li>title text</li>
					<li>picture --<strong> upload successful</strong></li>
					<li>outline text</li>
				</ul>
				<form name="f1"  method="post" action="">
				
				<div class="nav"> Select a learning level: </div><br />
				<select name="ll">
<?
				//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");

		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

		$qery="SELECT lname from levels where mname='".$_SESSION['mname']."' order by lno";
	
		$result=mysql_query($qery,$con);

		while($row=mysql_fetch_array($result))
		{
?>
					<option><?echo $row['lname']?></option>
<?
		}
		
?>
				</select>
				<br />
				<br />
				<div class="nav"> Step - 2: Enter content and select a picture-> </div><br />
				Choose from the available pictures:<br />
				<?php
					$pn=$_SESSION['pname'];
					
					$result = mysql_query("SELECT fname FROM uploads where pname='$pn'");
				?>					
				
				<select name="upload_file_list">	

				<?
				while($row = mysql_fetch_array($result))
				{ ?>

				<option><?php echo $row['fname'] ?></option>   <!this might be wrong>
  					<br />
				  <?
					}
				?>	

						
					</select>
					<br />
				
				<?	mysql_close($con);
				?> 
				Enter the slide name :<br>
				<input type="text" name="slide_name" value="">
				<br>
				<br>
				Please provide the content for these elements here:
				<ul>
				Formatting options:<br><br>
				<div id="tspot"></div><br><br><br>
					<li>title section<br>
						Enter the text here:<br>
						<?
						$oFCKeditor = new FCKeditor('FCKeditor1') ;
						$oFCKeditor->BasePath = 'fckeditor/' ;
						$oFCKeditor->Create() ;
						?><br />	
					</li>
					<br>
					
						Picture height<br />
						<input type="text" name="pic_height" /> <br />
						Picture width<br />
						<input type="text" name="pic_width" /> <br />
					</li>
					<br />
					
					<li>outline section<br>
						Enter the text here:<br>
						<?
						$oFCKeditor = new FCKeditor('FCKeditor2') ;
						$oFCKeditor->BasePath = 'fckeditor/' ;
						$oFCKeditor->Create() ;
						?>						
					<br>
					<br>
					</li>
				</ul>
				
				<input type="submit" name="preview" value="preview"     onClick="pview()">

				&nbsp&nbsp<input type="submit" name="create" value="create slide" onClick="cr()">
					
				</form>	

				</td>
					
				
			</tr>
		<table>
</body>
</html>
