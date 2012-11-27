<?php

session_start();

?><html>
<head>
<title>slide3
</title>
</head><body><form id="f1" action="scripts/slide3.php" method="post">
<div id="title" style="border:dashed; border-width:thin border-color:black" > <h1 align="center"><span id="title_content"><p>slide3</p></span></h1></div>
<div id="outlineandpicture" >
<table border="3">
<tr>
<td height="100" width="500"><img id="pic" src="http://localhost/test/scripts/pics/1.jpg" >
</td>
<td  height="100" width="500"><span id="outline_content"><p>who is this?</p></span>
<br />
<br />
<br />
</td>
</tr>
</table>
</div>
<input type="submit" name="next_slide" value="Next"></form></body>