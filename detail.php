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
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="DataTables/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="DataTables/css/fixedColumns.bootstrap.min.css">
  <script type="text/javascript" src="jQuery/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="DataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="DataTables/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="DataTables/js/dataTables.fixedColumns.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/sidebar.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid col-sm-4-fs">
    <div class="navbar-header">
      <a class="navbar-brand" href="index">Muncak Bareng</a>
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
      <?php
      include 'koneksi.php';
      $sql = mysql_query("SELECT * FROM jadwal WHERE Id=".$_GET['id']) or die(mysql_error());
      $no = 1;
      while ($detail = mysql_fetch_array($sql)){
      ?>
      <div class="col-sm-5">
        <table class="table">
          <h2>Detail Muncak Bareng</h2>
          <tr><td>Nama CP <?php echo $detail['cp']; ?> </td></tr>
          <tr><td>Telpon / WA / BBM / Line <?php echo $detail['telpon']; ?></td>
          <tr><td>Nama Gunung <?php echo $detail['gn_tujuan']; ?> </td></tr>
          <tr><td>Naik Jalur <?php echo $detail['naik_via']; ?> </td></tr>
          <tr><td>Tanggal Naik <?php echo $detail['tanggal_naik']; ?></td></tr>
          <tr><td>Turun Jalur <?php echo $detail['turun_via']; ?></td></tr>
          <tr><td>Tanggal Turun <?php echo $detail['tanggal_turun']; ?></tr>
          <tr><td>Meeting Point <?php echo $detail['mp']; ?></td></tr>
          <tr><td>Jam Kumpul <?php echo $detail['jam_mp']; ?></td></tr>
          <tr><td>Keterangan <?php echo $detail['keterangan'];?></td></tr>
          <tr>
            <td>
              <form method="post" action="update_komentar">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Berikan Komentar ?"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Kirim</button>
                <a href="jadwal" class="btn btn-danger">Kembali</a>
              </form>
            </td>
          </tr>
        </table>
      </div>
      <?php } ?>
    </body>
    </html>
