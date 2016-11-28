<?php
 if(!isset($_COOKIE['user'])) {
		include './include/default_footer.php';
	}else if($_COOKIE['user']==""){
		include './include/default_footer.php';
	}else{
		include './include/usr_footer.php';
	}
?>