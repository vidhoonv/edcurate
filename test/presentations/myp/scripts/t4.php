<?php

session_start();


$fhandle=fopen("/opt/lampp/htdocs/test/presentations/add.txt",'a') or die("cannot open file");

fwrite($fhandle,"single digit with carry\n- to -\n");
fclose($fhandle);



//redirecting to next page


//database part starts
$con = mysql_connect("localhost:3306","vidhoon"and "123456");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("cpa", $con) or die ('Could not connect: ' . mysql_error());
if($_POST['rb']==1)

{

header("Location:http://localhost/test/presentations/myp/t3.php");
mysql_query("UPDATE myp SET result='t3' where sname='t4'",$con);

}

else if($_POST['rb']==2)

{

header("Location:http://localhost/test/scripts/endofss.php");
mysql_query("UPDATE myp SET result='end' where sname='t4'",$con);

}


?>