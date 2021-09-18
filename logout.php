<?php


session_start();
if(session_destroy())
{
	unset($_SESSION['user']);
		session_unset();
header("Location: index.php");
}

?>