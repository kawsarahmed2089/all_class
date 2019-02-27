<?php
	session_start();
	$_SESSION['id'] = '';
	$_SESSION['name'] = '';
	session_destroy();
	
	header('Location: http://localhost/first_php/login.php');
?>