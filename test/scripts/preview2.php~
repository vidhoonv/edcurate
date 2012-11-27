
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>FCKeditor - Samples - Posted Data</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex, nofollow">
		<link rel="stylesheet" href="styles/s2.css">
	</head>
	<body>
	<?php

if ( isset( $_POST ) )
   $postArray = &$_POST ;			// 4.1.0 or later, use $_POST
else
   $postArray = &$HTTP_POST_VARS ;	// prior to 4.1.0, use HTTP_POST_VARS
?>	

<div class="header">Preview</div>
<br />
<br />
<div class="title"> 

<?php echo $postArray['FCKeditor1']?>
</div>

<div  >
<table border="3">
<tr>
<td height="100" width="500">
<img id="pic" src="pics/<?php echo $postArray['upload_file_list']?>" height="<?php echo $postArray['pic_height']?>" width="<?php echo $postArray
['pic_width']?>">

</td>
<td  height="100" width="500">
<span class="subtitle"><?php echo $postArray['FCKeditor2']?></span>
<br>
<br>																				
<br>										
</td>
</tr>
</table> 
</div>
</body>
</html>
