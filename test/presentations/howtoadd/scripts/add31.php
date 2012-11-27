<?php

session_start();




$fhandle=fopen("/opt/lampp/htdocs/test/presentations/add-howtoadd-kannan.txt",'a') or die("cannot open file");

fwrite($fhandle,"double digit without carry\n- to -\n");
fclose($fhandle);

//redirecting to next page
header("Location:http://localhost/test/presentations/howtoadd/add32.php");

?>