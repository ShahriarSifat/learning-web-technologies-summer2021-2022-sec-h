<?php 
	session_start();
	setcookie('status', 'true', time()-10, '/');
	if(session_destroy())
	{
	header('location: login.php');
	}
?>