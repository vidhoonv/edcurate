<?php

session_start();

?><html>
<head>
<title>add31
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
<form id="f1" action="scripts/add31.php" method="post">
<div class="header" ><h3 style=\"color: Red;\">Addition of 3 digit numbers</h3>
</div>
<br>
<div class="subtitle"  > 
<div align=\"center\"><center><span class=\"john\">Adding Three Digit Numbers</span></center></div>
<p>Adding two three digit numbers (for example 529 + 733) involves several steps.</p>
<ul>
    <li>Place one number above the other so that the hundreds, tens and ones places are lined up. Draw a line under the bottom number.</li>
    <blockquote>
    <pre><font size=\"+2\" face=\"courier\"><br />529<br /><u>733</u><br /></font>
</pre>
    </blockquote>
    <li>Add the ones place digits (9 + 3 = 12). This number is larger than 10 so place a one above the tens place column and place the two below the  line in the ones place column.</li>
    <blockquote>
    <pre><font size=\"+2\" face=\"courier\"><br />&nbsp;1<br />529<br /><u>733</u><br />&nbsp;&nbsp;2</font>
</pre>
    </blockquote>
    <li>Add the tens place digits (1 + 2 + 3 = 6) and place the answer below  the line and in the tens place column.</li>
    <blockquote>
    <pre><font size=\"+2\" face=\"courier\"><br />529<br /><u>733</u><br />&nbsp;62</font></pre>
    </blockquote>
    <li>Add the numbers in the hundreds place column (5 + 7 = 12) and place the 2 below the line and before the other number below the line.  Place the 1 from the  twelve above the thousands place column.</li>
    <blockquote>
    <pre><font size=\"+2\" face=\"courier\"><br />1</font>
<font size=\"+2\" face=\"courier\">&nbsp;529<br /><u>&nbsp;733</u><br />&nbsp;262</font></pre>
    </blockquote>
    <li>The thousands place column only has a 1 in it which should be placed   below the line in the thousands place column.</li>
</ul>
<blockquote>
<pre><font size=\"+2\" face=\"courier\"><br />&nbsp;&nbsp;529<br /><u>&nbsp;&nbsp;733</u><br />&nbsp;1262</font></pre>
</blockquote>
<ul><blockquote>
    <pre><font size=\"+2\" face=\"courier\">&nbsp;529<br /><u>&nbsp;733</u><br />&nbsp;262</font></pre>
    </blockquote>
    <li>The thousands place column only has a 1 in it which should be placed   below the line in the thousands place column.</li>
    <blockquote>
    <pre><font size=\"+2\" face=\"courier\"><br />&nbsp;&nbsp;529<br /><u>&nbsp;&nbsp;733</u><br />&nbsp;1262</font></pre>
    </blockquote></ul>
</div>
<br><br><br>
<input type="submit" name="next_slide" value="Next"></form>
</body>
</html>