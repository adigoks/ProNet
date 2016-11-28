<?php
	setcookie('user','');
	$_COOKIE['user'] ='';
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}
	unset($_SESSION['login']);
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = '';
	header("Location: http://$host$uri/$extra");
	exit;
?>