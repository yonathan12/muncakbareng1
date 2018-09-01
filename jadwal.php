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
	<title>Bootstrap</title>
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
    <h2>Jadwal Muncak Bareng</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buat Jadwal</button>
  <h2></h2>

  <!-- Tabel Jadwal -->
  <div class="table-responsive"> 
      <table id="jadwal" class="table">
          <thead>
            <tr>
            <th>No</th>
            <th>Gunung Tujuan</th>
            <th>Jalur</th>
            <th>Tanggal Naik</th>
            <th>Tanggal Turun</th>
            <th>Meeting Point</th>
            <th>Telpon</th>
            <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
               include 'koneksi.php';
               $data = mysqli_query($koneksi,"SELECT * FROM jadwal ORDER BY tanggal_naik ASC")or die(mysql_error());
               $no = 1;
               while($hasil = mysqli_fetch_array($data)){
                ?>
                <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $hasil['gn_tujuan']?></td>
                <td><?php echo $hasil['naik_via']?></td>
                <td><?php echo $hasil['tanggal_naik']; ?> </td>
                <td><?php echo $hasil['tanggal_turun']; ?> </td>
                <td><?php echo $hasil['mp']; ?> </td>
                <td><?php echo $hasil['telpon']; ?> </td>
                
                <td><a href="detail.php?id=<?php echo $hasil['Id'];?>" span class="glyphicon glyphicon-menu-hamburger">Detail</a></td>
               </tr>
            <?php } ?>
            <script>
               $(document).ready(function() {
               $('#jadwal').DataTable();
               } );
            </script>
          </tbody>
      </table>
    </div>
  <!-- Tabel Jadwal -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Buat Jadwal</h4>
        </div>
        <!-- Form awal -->
        <form class="form-horizontal" action="jadwal_proses" method="post">
          <div class="form-group">
            <label class="control-label col-sm-4" for="gunung">Gunung</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="gunung" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="cp">CP</label>
            <div class="col-sm-6"> 
              <input type="text" class="form-control" name="cp" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="kontak">Kontak</label>
            <div class="col-sm-6"> 
              <input type="text" class="form-control" name="telpon" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="tanggal_naik">Tanggal Naik</label>
            <div class="col-sm-4"> 
              <input type="date" class="form-control" name="tanggal_naik" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="jalur">Naik Jalur</label>
            <div class="col-sm-6"> 
              <input type="text" class="form-control" name="naik_via" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="tanggal_turun">Tanggal Turun</label>
            <div class="col-sm-4"> 
              <input type="date" class="form-control" name="tanggal_turun" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="jalur2">Turun Jalur</label>
            <div class="col-sm-6"> 
              <input type="text" class="form-control" name="turun_via" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="mp">Tanggal Kumpul di Meeting Point</label>
            <div class="col-sm-4"> 
              <input type="text" class="form-control" name="mp" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="jam_mp">Jam Kumpul</label>
            <div class="col-sm-3"> 
              <input type="time" class="form-control" name="jam_mp" placeholder="" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="Keterangan">Info Tambahan</label>
            <div class="col-sm-6"> 
              <input type="textarea" class="form-control" name="keterangan" placeholder="" required="">
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Submit</button>
              <button type="reset" class="btn btn-danger">Batal</button>
              <a href="jadwal" class="btn btn-primary">Kembali</a>
            </div>            
          </div>
        </form>
        <!-- Akhir Form -->
      </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  </div>
</body>
</html>