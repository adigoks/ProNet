 <div class="top-nav top">
 <div class="sisi-atas" style="float: right;"> 
 <ul class="nav nav-pills" >
 	<li role="presentation" >
 		
 			<?php
 			echo "<span style='margin: 5px 10px;display: block;'>Hi,  ".$_COOKIE['user']."</span>";
 			?>	 				
 	</li> 
 	<li role="presentation" >
 		<a href="/pronetui/?page=home" >Home</a>
 	</li> 
 	<li role="presentation">
 		<a href="/pronetui/?page=tentang">Tentang</a>
 	</li> 
 	<li role="presentation">
 		<a href="/pronetui/?page=rekap">Rekap</a>
 	</li> 
 	<li role="presentation" class="dropdown"> 
 		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
	 		<span class="glyphicon glyphicon-th-list"></span>
	 		<span class="caret"></span> 
 		</a>
  	<ul class="dropdown-menu"> 
  		<li><a href="/pronetui/?page=bantuan">bantuan</a></li> 
  		<li><a href="/pronetui/?page=pengaturan">pengaturan</a></li> 
  		<li><a href="logout.php">logout</a><li> 
  		<!--<li role="separator" class="divider"></li> 
  		<li><a href="index.php?page=">Separated link</a></li> -->
  	</ul> 
 </li> 
 </ul> 
 </div>
 </div>