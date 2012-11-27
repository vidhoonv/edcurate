<?
	session_start();	
?>
<HTML>
	<HEAD>
		<TITLE>edit template-1
		</TITLE>
		<script type="text/javascript" src="fckeditor/fckeditor.js"></script>
		<SCRIPT type="text/javascript">

			function pview()
			{
				//document.write("preview");
				document.f1.action="preview.php";  //may need changes
				document.f1.submit();    
				//return true;
			}
			
			function cr()
			{
				//document.write("create");
				document.f1.action="create.php";  //may need changes
				document.f1.submit();
				//return true;    
			}
		</SCRIPT>
					
<link rel="stylesheet" href="styles/s1.css">
	</HEAD>

	<BODY>
		<table border="3" bordercolor="black">
			<tr height="500">
				<td valign="top" width="800"><div class="header">provide information here:</div>
				 
				   <br><br>
				   <div class="subtitle"> The slide contains the following elements: </div>
				  <ul>
					<li>title text</li>
					<li>outline text</li>
				</ul>
				<form name="f1"  method="post" action="" >
				<div class="nav">Enter the slide name:</div><br />
				<input type="text" name="slide_name" value="">
				<br>
				<br>
				<div class="nav">Select a learning level:</div><br />
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
		mysql_close($con);
?>
				</select>
				<br />
				<br />
			<div class="subtitle">	Please provide the content for these elements here:</div>
				<ul>
				Formatting options:<br><br>
				<div id="tspot"></div><br><br><br>
					<li>title section<br>
						Enter the text here:<br>
						<script type="text/javascript">
						var oFCKeditor = new FCKeditor('FCKeditor1');
						oFCKeditor.BasePath = "fckeditor/";
						oFCKeditor.Height = 100;
						oFCKeditor.Config[ 'ToolbarLocation' ] = 'Out:tspot' ;						
						oFCKeditor.Create();
						</script>
					</li>
					<br>
					<li>outline section<br>
						Enter the text here:<br>
						<script type="text/javascript">
						var oFCKeditor = new FCKeditor('FCKeditor2');
						oFCKeditor.BasePath = "fckeditor/";
						oFCKeditor.Height = 300;	
						oFCKeditor.Config[ 'ToolbarLocation' ] = 'Out:tspot' ;						
						oFCKeditor.Create();
						</script>
					<br>
					</li>
				</ul>
				
				<input type="submit" name="preview" value="preview"     onClick="pview()">

				&nbsp&nbsp<input type="submit" name="create" value="create slide" onClick="cr()">
					
				</form>	

			  </td>
					
				
			</tr>
		<table>
		
	</BODY>

</HTML>
