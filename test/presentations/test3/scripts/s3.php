<?php

session_start();

//redirecting to next page


if($_POST['rb']==1)

{

header("Location:http://localhost/test/presentations/test3/s1.php");
}

else if($_POST['rb']==2)

{

header("Location:http://localhost/test/scripts/endofss.php");
}


?>