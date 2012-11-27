
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

<div class="header">Preview3</div>
<br/>
<br/>
<div class="title" > 
<?php echo $postArray['FCKeditor1']?>
</div>

<br>	
<div class="subtitle"  > 
<?php echo $postArray['FCKeditor2']?>
<span id="decision_content">
<?
	if($postArray['decision_name']=="radio button")
	{
		for ($i=1; $i<=$postArray['decision_number']; $i++)
  		{
			$j="t".$i;	?>
  			<br /> 
			<input type="radio" name="rb" value="<?$i?>"><? echo "$postArray[$j]"?> 
			<br />
  		<?}
	}
	else if($postArray['decision_name']=="check box")
	{
		for ($i=1; $i<=$postArray['decision_number']; $i++)
  		{
			$j="t".$i;	?>
  			<br /> 
			<input type="checkbox" name="cb" value="<?$i?>"><? echo "$postArray[$j]"?> 
			<br />
  		<?}
	}	 
?>
</span>
</div>

</body>
</html>
