<?php

session_start();

?><html>
<head>
<title>a3
</title>
<style type="text/css">
body {
background-color: #FFFFCC;
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
	line-height: 24px;
color: #333333;
}
.title {
font-family: Georgia, "Times New Roman", Times, serif;
font-size: 18px;
	line-height: 30px; color: #000000;
	border-color: #CCCCCC #333333 #333333 #CCCCCC;
border-width: 2px;
  border-style: dotted;
text-align:center;
font-weight:bold;
}
.subtitle {
font-family: Georgia, "Times New Roman", Times, serif;
font-size: 16px;
line-height: 20px;
font-weight: bold;
 color: #660000;
font-style: oblique;
border-width: 2px;
border-color: #CCCCCC #333333 #333333 #CCCCCC; 
border-style: dotted;
}
.header {
font-family: Georgia,"Times New Roman", Times, serif;font-size: 24px;background-color: #990000;
  color: #FFFF66;
} 
</style></head>
<body>
<form id="f1" action="scripts/a3.php" method="post">
<div class="header" ><p>addition</p>
</div>
<br>
<div class="subtitle"  > 
<p>addtion explanation</p>
</div>
<br><br><br>
<input type="submit" name="next_slide" value="Next"></form>
</body>
</html>