<!DOCTYPE html>
<html>
<head>
	<title>Muncak Bareng</title>
	<meta charset="utf-6">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
    body {
      padding-top: 70px;
    }
    </style>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a href="#home" class="navbar-brand page-scroll">Muncak Bareng</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav">
          <li><a href="#home" class="active page-scroll">Home</a></li>        
                    <li><a href="#gallery" class="page-scroll">Gallery</a></li>
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="login">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container">
    <form class="form-horizontal" action="register_proses" method="POST">
      <div class="form-group">
            <label class="control-label col-sm-4" for="nama">Nama Lengkap</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="" required="" name="nama">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-4" for="telpon">Telpon</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="" required="" name="telpon">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-4" for="email">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control"  placeholder="" required="" name="email">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-4" for="password">Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" placeholder="" required="" name="password">
            </div>
      </div>
      
      <div class="form-group">
            <label class="control-label col-sm-4" for="tempat_lahir">Tempat Lahir</label>
            <div class="col-sm-4">
              <input type="text" class="form-control"  placeholder="" required="" name="tempat_lahir">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-4" for="tanggal_lahir">Tanggal Lahir</label>
            <div class="col-sm-2">
              <input type="date" class="form-control" placeholder="" required="" name="tanggal_lahir">
            </div>
      </div>
      <div class="form-group">
            <label class="control-label col-sm-4" for="nama">Jenis Kelamin</label>
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
            <label class="control-label col-sm-4" for="alamat">Alamat</label>
            <div class="col-sm-4">
              <input type="textarea" class="form-control"  placeholder="" required="" name="alamat">
            </div>
      </div>
      <div class="form-group"> 
            <div class="col-sm-offset-4 col-sm-10">
              <button type="submit" class="btn btn-success">Submit</button>
              <button type="reset" class="btn btn-danger">Batal</button>
              <a href="index" class="btn btn-primary">Kembali</a>
            </div>            
          </div>
    </form>
  </div>
</body>
</html>