<?php include 'header.php'; ?>

	<div class="jumbotron content">
	
	
	<div class="row">
		<div class="col-md-10">
			<form class="form-horizontal" method="post" action="register_proses">
			
				
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
					<div class="col-sm-4">
					<input type="text" class="form-control" name="nama" placeholder="Nama" maxlength="50" required>
					</div>
					<label for="telpon" class="col-sm-2 control-label">Telpon</label>
					<div class="col-sm-3">
					<input type="phone" class="form-control" name="telpon" placeholder="Telpon" maxlength="20" required>
					</div>
				</div>

				<div class="form-group">
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-4">
					<input type="email" class="form-control" name="email" placeholder="Email" maxlength="70" required>
					</div>
					<label for="password" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-4">
					<input type="password" class="form-control" name="password" placeholder="Password" maxlength="15" required>
				</div>

				<div class="form-group">
				</div>

				</div>
				<div class="form-group">
					<label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
					<div class="col-sm-4">
					<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" maxlength="50" required>
					</div>
					<label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
					<div class="col-sm-2">
					<input type="date" class="form-control" name="tanggal_lahir" required>
					</div>
				</div>
				<div class="form-group">
					
				</div>
				<div class="form-group">
					<label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
					<div class="col-sm-3">
						<label class="radio-inline">
					  <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" required> Laki-laki
					</label>
					<label class="radio-inline">
					  <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" required> Perempuan
					</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="alamat" class="col-sm-2 control-label">Alamat</label>
					<div class="col-sm-8">
					<input type="textaarea" class="form-control" name="alamat" placeholder="Alamat" required>
					</div>
				</div>
				
					
				<div class="form-group">
					
				</div>
				

				
				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Daftar</button>
					<button type="reset" class="btn btn-default">Batal</button>
				</div>
			</div>
			</form>
		</div>
	</div>
	</div>
</body>
<?php include 'footer.php';?>
</html>