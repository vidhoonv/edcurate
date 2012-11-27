<?php

session_start();

?><html>
<head>
<title>t2
</title>
</head>
<body>
<form id="f1" action="scripts/t2.php" method="post">

<div id="title" style="border:dashed; border-width:thin border-color:black" >
 <h1 align="center">
<span id="title_content"><p>t2</p>
</span>
</h1>
</div>
<br /><div id="outline" style="border:dashed; border-width:thin border-color:#000000" >
 
<span id="outline_content"><p>t2</p>
</span>

<span id="decision_content">

<br />
<input type="radio" name="rb" value="1">prev
<br />

<br />
<input type="radio" name="rb" value="2">next
<br />

</span>
</div>
<input type="submit" name="next_slide" value="Next">
</form>
</body>
</html>