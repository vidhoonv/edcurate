<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Design Slide</title>
<link rel="stylesheet" type="text/css" href="http://localhost/moodle/theme/standard/styles.php" />
<link rel="stylesheet" type="text/css" href="http://localhost/moodle/theme/standardwhite/styles.php" />
 <link rel="shortcut icon" href="http://localhost/moodle/theme/standardwhite/favicon.ico" />
 
 <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="http://localhost/moodle/theme/standard/styles_ie7.css" />
<![endif]-->
<!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="http://localhost/moodle/theme/standard/styles_ie6.css" />
<![endif]-->

<script type="text/javascript" src="fckeditor/fckeditor.js"></script>
<script type="text/javascript">

var auto_play=1;

function preview()
{  
document.temp3.action="preview3.php";
document.temp3.submit();
}

function cr()
{  
document.temp3.action="cr4.php";
document.temp3.submit();
}

function autochange()
{
  if(auto_play){auto_play=0;
  document.getElementById("autoplay").value="Turn Autoplay Off";}
  else {auto_play=1;
  document.getElementById("autoplay").value="Turn Autoplay On";}
  
  
  if(document.getElementById("autoplay").value=="Turn Autoplay Off")
	document.getElementById("vid_cont").value="Use the Browse button to upload the Video. "+ "Autoplay is turned ON"; 
  else 
   document.getElementById("vid_cont").value="Use the Browse button to upload the Video. "+ "Autoplay is turned OFF";
}
</script>

</head>

<body>
<script type="text/javascript" defer="defer">
//<![CDATA[

editor_a80da1282f2c775bbc5f2c92c836968b = new HTMLArea('id_summary');
var config = editor_a80da1282f2c775bbc5f2c92c836968b.config;
config.pageStyle = "body { background-color: #ffffff; font-family: Trebuchet MS,Verdana,Arial,Helvetica,sans-serif; }";
config.killWordOnPaste = true;
config.fontname = {
"Trebuchet":	'Trebuchet MS,Verdana,Arial,Helvetica,sans-serif',
"Arial":	'arial,helvetica,sans-serif',
"Courier New":	'courier new,courier,monospace',
"Georgia":	'georgia,times new roman,times,serif',
"Tahoma":	'tahoma,arial,helvetica,sans-serif',
"Times New Roman":	'times new roman,times,serif',
"Verdana":	'verdana,arial,helvetica,sans-serif',
"Impact":	'impact',
"Wingdings":	'wingdings'};
editor_a80da1282f2c775bbc5f2c92c836968b.generate();
//]]>
</script>

<form name="temp3" target="_blank" method="post" action="" accept-charset="utf-8"  class="mform" enctype="multipart/form-data" >

	<div id="header" class=" clearfix">        <h1 class="headermain">MyMoodle </h1>
        <div class="headermenu"><div class="logininfo">You are logged in as <a  href=		  		"http://localhost/moodle/user/view.php?id=2&amp;course=1">Admin User</a>  (<a  href="http://localhost/moodle/login/logout.php?sesskey=RgnOTyvARN">Logout</a>)
		</div>
	</div>
	
	<br/>
	<div class="navbar clearfix">
        <div class="breadcrumb"><h2 class="accesshide " >You are here</h2> <ul>
<li class="first"><a onClick="this.target='_top'" href="http://localhost/moodle/">mm</a></li>
<li class="first"> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a onClick="this.target='_top'" href="http://localhost/moodle/mod/resource/index.php?id=1">Resources</a></li>
<li class="first"> <span class="accesshide " >/&nbsp;</span><span class="arrow sep">&#x25BA;</span> <a href="http://localhost/moodle/course/presentation.html">Editing Resource</a></li>
<li class="first"> <span class="accesshide">/&nbsp;</span><span class="arrow sep">&#x25BA;</span>Design Slide</li></ul>
</div>
</div>
</div>
<br/>

<div id='pres'></div>
<br />

<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<script type="text/javascript">
						var oFCKeditor = new FCKeditor('FCKeditor1');
						oFCKeditor.BasePath = "fckeditor/";
						oFCKeditor.Height = 40;
						oFCKeditor.Width=600;
						oFCKeditor.Value = '<i><b><center>Click To Add Title</center></b></i>' ;
						oFCKeditor.Config[ 'ToolbarLocation' ] = 'Out:pres' ;						
						oFCKeditor.Create();
</script>


<br /><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="15" id="vid_cont" name="vid_cont" cols="15" readonly="readonly">Use the Browse button to upload the Video.</textarea>&nbsp;&nbsp;
<input type="file" size="10" id="file" name="file" style="border:thin;border-style:dotted;"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<script type="text/javascript">
						var oFCKeditor = new FCKeditor('FCKeditor2');
						oFCKeditor.BasePath = "fckeditor/";
						oFCKeditor.Height = 300;
						oFCKeditor.Width=350;
						oFCKeditor.Value = '<i><b>Enter Text Here</b></i>' ;
						oFCKeditor.Config[ 'ToolbarLocation' ] = 'Out:pres' ;						
						oFCKeditor.Create();
</script>



<br /><br />
<input type="button" value="Turn Autoplay On" id="autoplay" onClick="autochange()"/>

<div class="fitem"><div class="fitemtitle"><div class="fgrouplabel"><label> </label></div></div><fieldset class="felement fgroup">
<input type="submit" value="Preview" onClick="preview()" />
<input type="submit" value="Create" onClick="cr()" />
</fieldset>


</form>
</body>
</html>
