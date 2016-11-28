<?php

	if(!isset($_COOKIE['user'])) {
		include './include/default_nav.php';
	}else if($_COOKIE['user']==""){
		include './include/default_nav.php';
	}else{
		include './include/usr_nav.php';
	}
?>