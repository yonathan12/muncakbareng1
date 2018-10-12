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
        <style>
        body {
            padding-top: 70px;
        }
        img {
            width: 350px;
            height: 350px;
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
                    <li><a href="gallery" class="page-scroll">Gallery</a></li>
                    <li><a href="about" class="page-scroll">About</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
                </div>
            </div>
        </nav>
	<div class="container">
		<?php
include '../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi,"SELECT * FROM artikel WHERE id='$id'");
while ($artikel = mysqli_fetch_array($sql)) {
?>
<h3><?php echo $artikel['judul']; ?></h3>
<p><?php echo $artikel['artikel']; ?></p>
<i><h5>post by <?php echo $artikel['penulis']; ?>, create on <?php echo $artikel['tgl_buat']; ?></h5></i>
<?php
}
?>
	</div>
	</body>
</html>



