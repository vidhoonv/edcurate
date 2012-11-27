<?php

session_start();

?><html>
<head>
<title>tester
</title>
</head>
<body>
<form id="f1" action="scripts/tester.php" method="post">

<div id="title" style="border:dashed; border-width:thin border-color:black" >
 <h1 align="center">
<span id="title_content"><p>checkbox&nbsp;</p>
</span>
</h1>
</div>
<br /><div id="outline" style="border:dashed; border-width:thin border-color:#000000" >
 
<span id="outline_content"><p>will this work&nbsp;</p>
</span>

<span id="decision_content">

<br />
<input type="checkbox" name="cb" value="1">t1
<br />

<br />
<input type="checkbox" name="cb" value="2">t2
<br />

</span>
</div>
<input type="submit" name="next_slide" value="Next">
</form>
</body>
</html>