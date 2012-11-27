
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex, nofollow">
<title>Preview Slide</title>

<script type="text/javascript">
function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
  
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>

</head>

<body onLoad="MM_CheckFlashVersion('7,0,0,0','Content on this page requires a newer version of Macromedia Flash Player. Do you want to download it now?');">

<?php
if ( isset( $_POST ) )
   $postArray = &$_POST ;			// 4.1.0 or later, use $_POST
else
   $postArray = &$HTTP_POST_VARS ;	// prior to 4.1.0, use HTTP_POST_VARS


$filname=$_FILES["file"]["name"];

$type=substr($filname,strpos($filname,".")+1);

$auto=$postArray["vid_cont"];

if($auto[strlen($auto)-1]=='N')$auto="true";
else $auto="false";

?>

<br />

<?php



echo "<div id='title' style='border:dotted; border-width:thin; border-color:#000000; position:absolute; height:50; width:500; left:375;top:75; '> " . 
$postArray['FCKeditor1']. "</div>";


 
 echo $type;
 
if(strcmp($type,"wav")==0 || strcmp($type,"avi")==0 || strcmp($type,"mp3")==0 ||
strcmp($type,"mpg")==0 || strcmp($type,"wmv")==0)
{
    		
 	move_uploaded_file($_FILES["file"]["tmp_name"],
 "/xampp/htdocs/moodle/course/" . $_FILES["file"]["name"]);
 		
	echo "<embed style='position:absolute;left:60;top:150' src='". $_FILES['file']['name']. "'autostart='".$auto."' hidden='false' width=350 height=350></embed>";
}

else if(strcmp($type,"flv")==0)
{
 
  move_uploaded_file($_FILES["file"]["tmp_name"],
 "/xampp/htdocs/moodle/course/" . $_FILES["file"]["name"]);
 
 echo '<br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="320" height="480" id="FLVPlayer">
  <param name="movie" value="FLVPlayer_Progressive.swf" />
  <param name="salign" value="lt" />
  <param name="quality" value="high" />
  <param name="scale" value="noscale" />
  <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName=;' .
  substr($filname,0,strpos($filname,".")) . '&autoPlay='.$auto.'&autoRewind=false" />
  <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_1&streamName='.  
  substr($filname,0,strpos($filname,".")) . '&autoPlay='.$auto.'&autoRewind=false" quality="high" scale="noscale" width="320" height="480" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>';

}

echo "<br /><br />
<div id='content' style='border:dotted; border-width:thin; border-color:#000000; height:400; width:400;position:absolute;left:500;top:150;' ><b>". $postArray['FCKeditor2']. "</b>
</div>";
 
?>
</body>
</html>
