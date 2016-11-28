<?php 
require 'head.html';
include 'usr_nav.php';

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
 
 	if (isset($_REQUEST['page'])) {
		switch($_REQUEST['page'])
		{
		case "ketentuan":
			include "ketentuan.php";
			break;
		case "faq":
			include "FAQ.php";
			break;		
		case "bantuan":
			include "bantuan.php";
			break;	
		case "pengaturan":
			include "update_data.php";
			break;
		case "daftar":
			include "daftar.php";
			break;
		case "tentang":
			include "about.php";
			break;
		case "rekap":
			include "rekap.php";
			break;
		case "validasi":
			include "validate.php";
			break;
		default:
			include "home.php";
			break;


		} 
		
	}else {
		include "home.php";
	}
	

 ?>
<div id="footer">
	<h3 style="font-size: 15;padding: 15px 0;">
	
		<span class="footer-text"><a href="/pronetui/?page=tentang">Tentang</a> </span> 
		<span class="footer-text"><a href="/pronetui/?page=bantuan">bantuan</a></span> 
		<span class="footer-text"><a href="/pronetui/?page=ketentuan">ketentuan</a></span>  
		<span class="footer-text"><a href="/pronetui/?page=faq">FAQ</a></span> 
		<span class="footer-text"><a href="/pronetui/?page=daftar">daftar</a></span>
		<span class="footer-text"><a href="/pronetui/?page=login">login</a></span>
	
	 </h3>
</div>