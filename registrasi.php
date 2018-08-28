<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Muncak Bareng</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="jQuery/jquery-3.2.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<style>
		body {
			padding-top: 70px;
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					 <a href="index" class="navbar-brand page-scroll">Muncak Bareng</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-2">
					<ul class="nav navbar-nav">
					<li><a href="index" class="active page-scroll">Home</a></li>				
                    <li><a href="index#gallery" class="page-scroll">Gallery</a></li>
                    <li><a href="index#about" class="page-scroll">About</a></li>
                    <li><a href="login">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</body>

	<div class="jumbotron content">
	
	<div class="row">
		<div class="col-md-9">
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
					<button type="submit" class="btn btn-success">Daftar</button>
					<button type="reset" class="btn btn-danger">Batal</button>
				</div>
			</div>
			</form>
		</div>
	</div>
	</div>
</body>
<?php include 'footer.php';?>
</html>