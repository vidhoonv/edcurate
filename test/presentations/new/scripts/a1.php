<?php

session_start();




$fhandle=fopen("/opt/lampp/htdocs/test/presentations/add-new-kannan.txt",'a') or die("cannot open file");

fwrite($fhandle,"single digit without carry\n- to -\n");
fclose($fhandle);

//redirecting to next page
header("Location:http://localhost/test/presentations/new/a2.php");

?>