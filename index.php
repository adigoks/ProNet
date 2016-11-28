<?php 
if (session_status() == PHP_SESSION_NONE) {
    		session_start();
		}
require 'head.html';
include 'nav.php';

?>

 <div class="top-nav"></div>
 <div id="header" style="">
	<div class="logo-place">
			<img src="img/logo-udinus.png" class="logo" style="width:100px; height: 100px;">
	</div>
	<div style="margin:15px 0px;width: 100%; display: inline-block; position: absolute; text-align: center;color: white;">
		<h1> 
		Call <sub style="font-size:20;">for</sub></br> Paper</h1>
	</div>	
</div>

 <?php
 
 	if (isset($_GET['page'])) {
		switch($_GET['page'])
		{
		case "ketentuan":
			include "./include/ketentuan.php";
			break;
		case "faq":
			include "./include/FAQ.php";
			break;		
		case "bantuan":
			include "./include/bantuan.php";
			break;	
		case "home":
			include "./include/home.php";
			break;
		case "pengaturan":
			include "./include/update_data.php";
			break;
		case "daftar":
			include "./include/daftar.php";
			break;
		case "tentang":
			include "./include/about.php";
			break;
		case "rekap":
			include "./include/rekap.php";
			break;
		case "login":
			include "./include/login.php";
			break;
		case "validasi":
			include "./include/validate.php";
			break;
		default:
			include "./include/home.php";
			break;
		} 
		
	}else {
		include "./include/home.php";
	}

	include "footer.php";
 ?>
