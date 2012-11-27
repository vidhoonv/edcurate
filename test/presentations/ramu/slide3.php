<?php

session_start();

?><html>
<head>
<title>slide3
</title>
</head>
<body>
<form id="f1" action="scripts/slide3.php" method="post">

<div class="header"  >
<span id="title_content"><p>this is a must working thing</p>
</span>
</div>
<br /><div>
 
<span class="subtitle"><p>can it prove again?</p>
</span>

<span class="subttile">

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