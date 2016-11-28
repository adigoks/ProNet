
			<div id="conten">
				<div id="tengah">
					<div id="tulisan" >
						<h3 style="margin: 10px 0;">DAFTAR</h3>
						<h1 style="text-align:center;">Daftar sebagai peserta</h1>
						<div class="daftar-layout">
							<form id="daftar" action="loged-in.php?page=validasi" method="post" class="form-daftar">
							<label for="MyName">Nama</label> 
									<input class="form-control" name="MyName" type="text" placeholder="Ex. Muqaffi" required><br>
							<label for="MyId">NIM</label>
									<input class="form-control" name="MyId" 
										pattern="[A-Ea-e]{1}[1-4]{2}[.]{1}[0-9]{4}[.]{1}[0-9]{5}"  placeholder="Axx.20xx.084xx" required><br>
							<label for="Email">Email</label>
									<input class="form-control" name="Email" type="email" placeholder="Ex. kyosxxx_asaxxxx@yxxxx.com" required=""><br>
							<label for="progdi">Jurusan</label>
									<select class="form-control" name="progdi" placeholder="TI S1">
										<option value="TI-S1" >TI-S1</option>
										<option value="SI-S1">SI-S1</option>
										<option value="DKV-S1">DKV-S1</option>
									</select>
									<br>
							<label for="pass">Password</label>
									<input class="form-control" name="pass" type="password" placeholder="xxxxxxxxxx" required><br>
							<label for="konfirm">Konfirmasi Password</label>
									<input class="form-control" name="pass" type="password" placeholder="xxxxxxxxxx" required><br>
							<input class="btn btn-default"  type="submit" value="daftar">
					
							</form>

							
							<div id="img-up">
								<div>
								Upload Paper anda
								<br>
								<input type="file" value="upload paper" required>
								</div>
								<br><br>Upload Foto Anda<br> <br><br><br><br> <input type="file" value="upload file">
							</div>
						</div>
					</div>					
				</div>				
			</div>
				
			
			