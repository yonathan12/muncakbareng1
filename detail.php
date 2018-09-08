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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="DataTables/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="DataTables/css/fixedColumns.bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="DataTables/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="DataTables/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="DataTables/js/dataTables.fixedColumns.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home">Muncak Bareng</a>
    	</div>
    	<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="home">Home</a></li>
        <li ><a href="profil">Profil</a></li>
        <li class="active"><a href="jadwal">Jadwal</a></li>
        
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout"> <span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
  </div>
	</nav>
  <div class="container">
      <?php
      include 'koneksi.php';
      $sql = mysqli_query($koneksi,"SELECT * FROM jadwal WHERE Id=".$_GET['id']);
      while ($detail = mysqli_fetch_array($sql)){
      ?>
      <p></p>
      <p>Nama CP <?php echo $detail['cp']; ?></p>
      <p>Telpon / WA / BBM / Line <?php echo $detail['telpon']; ?></p>
      <p>Gunung Tujuan <?php echo $detail['gn_tujuan']; ?></p>
      <p>Tanggal Naik <?php echo $detail['tanggal_naik']; ?></p>
      <p>Naik Jalur <?php echo $detail['naik_via']; ?></p>
      <p>Tanggal Turun <?php echo $detail['tanggal_turun']; ?></p>
      <p>Turun Jalur <?php echo $detail['turun_via']; ?></p>
      <p>Meeting Point <?php echo $detail['mp']; ?></p>
      <p>Jam Kumpul <?php echo $detail['jam_mp']; ?></p>
      <p>Keterangan <?php echo $detail['keterangan'];?></p>
      <br/>
      <p>Komentar</p>
      <?php } ?>

      <?php
      include 'koneksi.php';
      $sql = mysqli_query($koneksi,"SELECT * FROM komentar WHERE idJadwal=".$_GET['id']);
      while ($detail = mysqli_fetch_array($sql)){
      ?>
      <table border="1">
      <p><?php echo $detail['nama']; ?> <?php echo " : "; ?><?php echo $detail['komentar']; ?></p>  
      </table>
      
      <?php } ?>
              <form method="post" action="update_komentar?id=<?php echo $_GET['id']; ?>">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Berikan Komentar ?" name="komentar" required=""></textarea>
                </div>
                <button type="submit" class="btn btn-success">Kirim</button>
                <a href="jadwal" class="btn btn-danger">Kembali</a>
              </form>
  </div>
</body>
</html>