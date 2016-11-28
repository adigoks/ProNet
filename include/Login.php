<?php
	if (session_status() == PHP_SESSION_NONE) {
    		session_start();
		}
?>
<div id="conten">
	<div id="tengah">
		<div id="tulisan" class="tulisan-center">
			<h3 style="margin: auto;">LOGIN</h3>
			<form class="login-form " action="login_auth.php" method="POST">
					<br>
					<label for="NIM">NIM</label>
					<input class="form-control has-warning" name="NIM"  pattern="[A-Ea-e]{1}[1-4]{2}[.]{1}[0-9]{4}[.]{1}[0-9]{5}"  placeholder="NIM anda" required>
					<br>
					<label for="pass">Password</label>

					<input class="form-control" name="pass" type="password" placeholder="xxxxxxxxxx" required>
					<br>
					<?php
						if(isset($_SESSION['login'])){
							if($_SESSION['login']==false){
							echo "NIM atau password anda salah<br>silahkan hubungi panitia bila anda lupa password anda<br>";
							unset($_SESSION['login']);
							}else{
								echo $valid;
							}
						}else{
							
						}
					?>
					<br>
					<input class="btn btn-primary" type="submit" value="LOGIN" style="width: 100%">
			</form>
		</div>
	</div>
</div>