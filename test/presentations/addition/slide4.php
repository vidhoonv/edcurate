<?php

session_start();

?><html>
<head>
<title>slide4
</title>
</head>
<body>
<form id="f1" action="scripts/slide4.php" method="post">

<div id="title" style="border:dashed; border-width:thin border-color:black" >
 <h1 align="center">
<span id="title_content"><p>slide4</p>
</span>
</h1>
</div>
<br /><div id="outline" style="border:dashed; border-width:thin border-color:#000000" >
 
<span id="outline_content"><p>was that an actor?</p>
</span>

<span id="decision_content">

<br />
<input type="radio" name="rb" value="1">yes
<br />

<br />
<input type="radio" name="rb" value="2">no
<br />

</span>
</div>
<input type="submit" name="next_slide" value="Next">
</form>
</body>
</html>