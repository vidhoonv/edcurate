<?php
session_start();

$con = mysql_connect("localhost:3306","vidhoon"and "123456");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error()); 
	

?>

<HTML>
	<HEAD>
		<TITLE>
			Define course
		</TITLE>
		<link rel="stylesheet" href="scripts/styles/s1.css">
		<script type="text/javascript">

		var c=0;
		var name_in_use;
		var np;

		function aj()
		{
	//	document.write("hello");
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

		var url="scripts/get_mod_list.php";
		
	//	url=url+"&sid="+Math.random();
		//document.write(url);	
		xmlhttp.onreadystatechange=function()
		{
		//	document.write(url);			
			

		if(xmlhttp.readyState==4)
  		{
				
		
			var s=xmlhttp.responseText;
					
			//document.write(s);	
			var pnames= new Array();
			pnames=s.split("|");
			var l=pnames.length;
			var op=document.getElementById(name_in_use);

			for(i=0;i<l-1;i++)
			addOption(op,pnames[i]);					
			
			//addOption(pn,l);
		

		}
			
		}
		xmlhttp.open("GET",url,true);
			xmlhttp.send(null);

	
	}



		function plist(str)
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

		var url="scripts/get_p_list.php";
		url=url+"?q="+str;
		url=url+"&sid="+Math.random();

		xmlhttp.onreadystatechange=function()
		{
		//	document.write(url);			
			

		if(xmlhttp.readyState==4)
  		{
				
		
			var s=xmlhttp.responseText;
					
			//document.write(s);	
			var pnames= new Array();
			pnames=s.split("|");
			var l=pnames.length;
			var op=document.getElementById(np);

			for(i=0;i<l-1;i++)
			addOption(op,pnames[i]);					
			
			//addOption(pn,l);
		

		}
			
		}
		xmlhttp.open("GET",url,true);
			xmlhttp.send(null);

	
	}	
		function add_opt()
		{

			
			var aa=document.getElementById("space");
			
			c++;			
			name_in_use="d"+c;
			np="p"+c;
			aa.innerHTML+=" <br><br>Select Module:<br><select name=\"d"+c+"\" id=\"d"+c+"\" onchange=\"plist(this.value)\">"+"<option>list of modules</option></select>";  
			aa.innerHTML+=" <br><br>Select presentation:<br><select name=\"p"+c+"\" id=\"p"+c+"\">"+"<option>list of presentations</option></select>";  

			aj();

		//	document.write(c+name_in_use);
		}

		
		
		function addOption(selectbox,text)
		{
		var optn = document.createElement("OPTION");
		optn.text = text;
		optn.value = text;
		selectbox.options.add(optn);
		}
		</script>

</HEAD>

	<BODY>
		<div class="header">Define course: </div><br /><br/>

		
		<form id="course" action="scripts/addc.php" method="post" >
		<div class="nav">Enter course name:</div><br/>
		<input type="text" name="cn">		
		<br/>
		<div class="nav">Enter number of modules:</div><br/>
		<input type="text" name="no">		
		<br/>
		<div class="subtitle">Add modules to the course and a related presentation:</div><br><br>
		<div id="space" name="space">
			
		</div>

		<br/>
		<br />
		<br />
		<input type="submit" name="add" value="add module" onMouseOver="add_opt()">
		<br />
		<br />		
		<input type="submit" name="define" value="Add course" >
		
		</form>	
	</BODY>

</HTML>
