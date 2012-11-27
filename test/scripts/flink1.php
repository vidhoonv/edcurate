<?php
session_start();
//echo $_SESSION['pname'];
?>
<HTML>
	<HEAD>
		<TITLE>
			linking structure S1
		</TITLE>

		<script type="text/javascript">

			
			var globe=1;			
		function ajaxFunction(str)
		{
			//document.write("af");
			var xmlhttp;
		if (window.XMLHttpRequest)
  		{
  			// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
		else if (window.ActiveXObject)
  		{
 			 // code for IE6, IE5
 			 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		else
  		{
  		alert("Your browser does not support XMLHTTP!");
  		}

		var url="m1.php";
		url=url+"?q="+str;
		url=url+"&sid="+Math.random();
		xmlhttp.onreadystatechange=function()
		{
		if(xmlhttp.readyState==4)
  		{
			//document.write(str);
			var s=xmlhttp.responseText;
			
			var snames=new Array();
			snames=s.split('|');
			var nd=snames[0];
			//document.write(nd);
			var count=snames.length;
			var db1="<select onChange=\"ajaxFunction2(this.value)\" name=d";
			var db2="<option>";
			var db3="</option>";	
			var db4="</select><br><br>";
			var arrow='';
			var title='';
			var ll="<option>LIST OF LEVELS</option><option>----------------</option>";
			var sp=document.getElementById("branch");
			var r='';
			for(j=1;j<=nd;j++)
			{
			title="<span style=\"position: absolute; top:"+(100+100*j)+"; left: 680px;\">Choose :</span>";
			arrow="<span style=\"position: absolute; top:"+(150+100*j)+"; left: 620px;\">|  ---></span>";	
			r+=title+arrow+""+db1+""+j+""+" style=\"position:absolute; top:"+(150+100*j)+";  left: 680px;\"  "+">"+ll;					
			for(i=1;i<count-1;i++)
			{
				
				r+=db2+snames[i]+db3;
			}
				r+=db4;
			}
			
			sp.innerHTML+=r;
			//kk.value=r;
		}
		}
			xmlhttp.open("GET",url,true);
			xmlhttp.send(null);
		}
			

		function ajaxFunction2(str)
		{
				
		  		var xmlhttp;
		if (window.XMLHttpRequest)
  		{
  			// code for IE7+, Firefox, Chrome, Opera, Safari
  			xmlhttp=new XMLHttpRequest();
  		}
		else if (window.ActiveXObject)
  		{
 			 // code for IE6, IE5
 			 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		else
  		{
  		alert("Your browser does not support XMLHTTP!");
  		}
			
			var url="m2.php";
			url=url+"?t="+str;
			url=url+"&sid="+Math.random();

		xmlhttp.onreadystatechange=function()
		{
		if(xmlhttp.readyState==4)
  		{
	//		document.write("hello");
			var s=xmlhttp.responseText;
			var snames=new Array();
			snames=s.split('|');
			var aa=document.getElementById("slide");
			var count=snames.length;
			var db1="<select  name=dd";
			var db2="<option>";
			var db3="</option>";	
			var db4="</select><br><br>";
			var arrow='';
			var title='';
			var ls="<option>LIST OF SLIDES</option><option>--------------------</option>";
			var r='';
			title="<span style=\"position: absolute; top:"+(100+100*globe)+"; left: 900px;\">Choose :</span>";
			arrow="<span style=\"position: absolute; top:"+(150+100*globe)+"; left: 900px;\">|  ---></span>";
			r+=title+""+arrow+""+db1+""+globe+""+" style=\"position:absolute; top:"+(150+100*globe)+";  left: 940px;\" "+""+">"+ls;					
			for(i=0;i<count-1;i++)
			{
				r+=db2+snames[i]+db3;
			}
				r+=db4;
			aa.innerHTML+=r;
	//		aa.value=snames[0];
			globe++;
			
		}		
		}
			
			xmlhttp.open("GET",url,true);
			xmlhttp.send(null);
		}
		</script>
		<link rel="stylesheet" href="styles/s1.css">
	</HEAD>

	<BODY>
		<div class="header">Linking level</div>
		<form id="f1" action="http://localhost/test/scripts/linker1.php" method="post">
		<span style="position: absolute; top: 200px; left: 50px;">content slides:</span>
		<select name="c1" style="position: absolute; top: 250px; left: 50px;" >
<?
				//database part starts
		$con = mysql_connect("localhost:3306","vidhoon"and "123456");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 

	
		
		$query1="SELECT sname FROM ".$_SESSION['pname']." inner join levels where ".$_SESSION['pname'].".lname=levels.lname and levels.lname='".$_SESSION['level']."' and cd=0";
		$result1=mysql_query($query1,$con);  

		while($row=mysql_fetch_array($result1))
		{
?>
		<option><?echo $row['sname']?></option>
<?
		}
?>
		</select>
		<span style="position: absolute; top: 200px; left: 470px;">decision slide:</span>
		<span style="position: absolute; top: 250px; left: 485px;">|  ---></span>
		<select name="decision" style="position: absolute; top: 250px; left: 550px;" onChange="ajaxFunction(this.value)" >
		<option>list:</option>
<?
			$query1="SELECT sname FROM ".$_SESSION['pname']." inner join levels where ".$_SESSION['pname'].".lname=levels.lname and levels.lname='".$_SESSION['level']."' and cd=1";
		$result1=mysql_query($query1,$con);  

		while($row=mysql_fetch_array($result1))
		{
?>
		<option><?echo $row['sname']?></option>
<?
		}
?>

		</select>

		<div id="branch">
		</div>
		<div id="slide">
		</div>
		<input type="submit" value="link" style="position: absolute; top: 500px; left: 150px;">
		</form>
	</BODY>

</HTML>
