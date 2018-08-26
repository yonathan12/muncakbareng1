<?php
session_start();
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
  session_destroy();
  header('location:index');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Muncak Bareng</title>
  <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.2/css/fixedColumns.bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="bootstrap/css/sidebar.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid col-sm-4-fs">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">Muncak Bareng</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
     
    </ul>
  </div>
</nav>

<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>         
        <li ><a href="profile">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
        <li ><a href="jadwal">Jadwal Muncak Bareng<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon 
        glyphicon-tags"></span></a></li>
        <li ><a href="buat_jadwal">Buat Jadwal<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
        <li ><a href="logout">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

		<div class="col-md-10">
			<form class="form-horizontal" method="post" action="jadwal_proses">
			
				
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Gunung</label>
					<div class="col-sm-4">
					<input type="text" class="form-control" name="gunung" placeholder="Ex Gunung Slamet" maxlength="50" required>
					</div>
				</div>
        <!-- <div class="form-group">
          <label for="cp" class="col-sm-2 control-label">CP</label>
          <div class="col-sm-4">
          <input type="text" disabled="" class="form-control" name="cp" value="<?php echo $_SESSION['nama']; ?>">
          </div>
        </div> -->
        <div class="form-group">
          <label for="cp" class="col-sm-2 control-label">CP</label>
          <div class="col-sm-4">
          <input type="text" class="form-control" name="cp">
          </div>
        </div>
        <div class="form-group">
          <label for="telpon" class="col-sm-2 control-label">Kontak</label>
          <div class="col-sm-3">
          <input type="phone" class="form-control" name="telpon" placeholder="WA/BBM/Line/Tlpn" maxlength="70" required>
          </div>
        </div>

				

				<div class="form-group">
					<label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Naik</label>
					<div class="col-sm-2">
					<input type="date" class="form-control" name="tanggal_naik" required >
					</div>
					<label for="naik_via" class="col-sm-2 control-label">Naik Dari</label>
					<div class="col-sm-2">
					<input type="text" class="form-control" name="naik_via" required placeholder="Ex Bambangan">
					</div>
				</div>
				<div class="form-group">
					<label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Turun</label>
					<div class="col-sm-2">
					<input type="date" class="form-control" name="tanggal_turun" required>
					</div>
					<label for="naik_via" class="col-sm-2 control-label">Turun Dari</label>
					<div class="col-sm-2">
					<input type="text" class="form-control" name="turun_via" required placeholder="Ex Bambangan">
					</div>
				</div>
				<div class="form-group">
					<label for="mp" class="col-sm-2 control-label">Meeting Point</label>
					<div class="col-sm-3">
					<input type="textarea" class="form-control" name="mp" placeholder="Ex St Purwokerto" required>
					</div>
				</div>
				<div class="form-group">
					<label for="tanggal_mp" class="col-sm-2 control-label">Tanggal Kumpul di MP </label>
					<div class="col-sm-2">
					<input type="date" class="form-control" name="tanggal_mp" required>
					</div>
					<label for="jam_mp" class="col-sm-2 control-label">Jam Kumpul di MP</label>
					<div class="col-sm-2">
					<input type="time" class="form-control" name="jam_mp" required>
					</div>
				</div>

				
				<div class="form-group">
					<label for="Keterangan" class="col-sm-2 control-label">Keterangan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="keterangan" placeholder="Ex Berangkat dari BC jam 8 pagi" required>
					</div>
				<div class="form-group">
					
				</div>
				
				<div class="form-group">
					<label for="" class="col-sm-2 control-label"> &nbsp</label>
				<div class="col-sm-4">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Batal</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</body>
</html>