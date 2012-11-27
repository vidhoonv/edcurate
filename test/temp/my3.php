<?php

session_start();

?><html>
<head>
<title>my3
</title>
</head>
<body>
<form id="f1" action="scripts/my3.php" method="post">

<div id="title" style="border:dashed; border-width:thin border-color:black" >
 <h1 align="center">
<span id="title_content"><p>s3</p>
</span>
</h1>
</div>
<br /><div id="outline" style="border:dashed; border-width:thin border-color:#000000" >
 
<span id="outline_content"><p>s3</p>
</span>

<span id="decision_content">

<br />
<input type="radio" name="rb" value="1">s5
<br />

<br />
<input type="radio" name="rb" value="2">s6
<br />

</span>
</div>
<input type="submit" name="next_slide" value="Next">
</form>
</body>
</html>