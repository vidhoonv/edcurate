<?php

session_start();

?><html>
<head>
<title>add21
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
<form id="f1" action="scripts/add21.php" method="post">
<div class="header" ><h3 style=\"color: Red;\">Addition of 2 digit numbers</h3>
</div>
<br>
<div class="subtitle"  > 
<blockquote class=\"bold\">
<p>How to add two two-digit numbers (for example 45 + 53).</p>
<ul>
    <li>Place one number above the other number so that the tens\' place digits and ones\' place digits are lined up.  Draw a line under the bottom number.</li>
    <blockquote>
    <pre>
45
<u>53</u>
</pre>
    </blockquote>
    <li>Add the two ones\' place digits (5 + 3 = 8).</li>
    <blockquote>
    <pre>
45
<u>53</u>
&nbsp;8
</pre>
    </blockquote>
    <li>Add the numbers in the tens\' place column (4 + 5 = 9) and place the answer below the line and to the left of the ones\' place sum.</li>
    <blockquote>
    <pre>
&nbsp;45
<u>&nbsp;53</u>
&nbsp;98</pre>
    </blockquote></ul>
    </blockquote>
</div>
<br><br><br>
<input type="submit" name="next_slide" value="Next"></form>
</body>
</html>