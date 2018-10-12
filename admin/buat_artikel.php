<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Muncak Bareng</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
        <style>
        body {
            padding-top: 70px;
        }
        </style>
		</head>
<body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index">Muncak Bareng</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="index" class="active page-scroll">Home</a></li>
                    <li><a href="artikel" class="page-scroll">Artikel</a></li>             
                    <li><a href="#" class="page-scroll">Gallery</a></li>
                    <li><a href="#" class="page-scroll">About</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <form class="form-horizontal" method="POST" action="artikel_proses">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nama">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="" required="" name="judul">
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nama">Isi Artikel</label>
                        <div class="col-sm-10">
                            <textarea class="ckeditor" id="ckedtor" name="artikel"></textarea>
                        </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Simpan</button>
                      <button type="reset" class="btn btn-danger">Batal</button>
                      <a href="artikel" class="btn btn-primary">Kembali</a>
                    </div>            
                </div>
                
            </form>
        </div>
    </body>
</html>