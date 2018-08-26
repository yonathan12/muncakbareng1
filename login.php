<!DOCTYPE html>
<html>
<head>
	<title>Muncak Bareng</title>
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
	.content{
		background-image: url('');
		background-size: cover;
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		min-height: 610px;
		min-width: auto;
	}
	.fs{
		font-size: 20px;
		font-family: bold;
		font-color: black;
	}
	.avatar{
    width: 100px;
    height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
    background-image: url("");

}
.container img {
	border: 0px;
}
	</style>
</head>
<body>
<div class="container">
	<div class="row" style="position:center">
		<div class="col-md-4 col-md-offset-4">
				<form method="post" action="cek_login" class="form-signin" role="form">
					<img src="img/logo.png" class="form-signin-heading img-circle img-responsive" width="360" height="304"></a>
					<div class="text-center">
						<h1>MuncakBareng.com</h1>
					</div>

					<div class="input-group">
      					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      					<input type="email" class="form-control" name="email" required oninvalid="this.setCustomValidity('Email tidak boleh kosong')"oninput="setCustomValidity('')" placeholder="Masukan Email" autofocus="">
    				</div>
    				<br>
    				<div class="input-group">
      					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      					<input type="password" class="form-control" name="password" required="" maxlength="35" oninvalid="this.setCustomValidity('Maaf kolom tidak boleh kosong')"oninput="setCustomValidity('')" placeholder="Kata Sandi">
    				</div>
    					<br>
    				<div class="text-left">
    					<a href="registrasi"">Belum Punya Akun ?</a>
    				</div>
    					<br>
						<tr>
							<td>
								<button class="btn btn-lg btn-primary btn-block btn-login" type="submit" value="login">Login</button>
							</td>
							<td><a href="index" class="btn btn-lg btn-primary btn-block btn-danger">Batal</a></td>
						</tr>
				</form>
			</div>
		</div>
	</div>
</body>
