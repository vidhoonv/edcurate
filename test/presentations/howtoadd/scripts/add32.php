<?php

session_start();


$fhandle=fopen("/opt/lampp/htdocs/test/presentations/add-howtoadd-kannan.txt",'a') or die("cannot open file");

fwrite($fhandle,"double digit without carry\n- to -\n");
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

header("Location:http://localhost/test/presentations/howtoadd/add31.php");
mysql_query("UPDATE howtoadd SET result='add31' where sname='add32'",$con);

}

else if($_POST['rb']==2)

{

header("Location:http://localhost/test/scripts/endofss.php");
mysql_query("UPDATE howtoadd SET result='end' where sname='add32'",$con);

}


?>