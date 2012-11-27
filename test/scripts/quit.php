<?php
session_start();
// end the current session of user

session_destroy();
//redirect to start.html

	header("Location:http://localhost/test/users/login_user.html");
?>

