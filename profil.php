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
        <li class="active"><a href="profil">Profil</a></li>
        <li><a href="jadwal">Jadwal</a></li>
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
    $id = $_SESSION['Id'];
    $sql = mysqli_query($koneksi,"SELECT * FROM user WHERE Id='$id'");
    while ($profile = mysqli_fetch_array($sql)) {
      
    ?>
    <p>Nama : <?php echo $profile['nama'];?></p>
    <p>Telpon :<?php echo $profile['telpon'];?></p>
    <p>Email : <?php echo $profile['email'];?></p>
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
               $email = $_SESSION['email'];
               $status = 'TRUE';
               $data = mysqli_query($koneksi,"SELECT * FROM jadwal WHERE username='$email' AND status='$status' ORDER BY tanggal_naik ASC")or die(mysql_error());
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
                
                <td><a href="detail_post_profil.php?id=<?php echo $hasil['Id'];?> && email=<?php echo $hasil['username']; ?>" span class="glyphicon glyphicon-menu-hamburger"></a>
                  <a href="hapus_post.php?id=<?php echo $hasil['Id'];?> && email=<?php echo $hasil['username']; ?>" span class="glyphicon glyphicon-trash"></a></td>
               </tr>
            <?php } ?>
            <script>
               $(document).ready(function() {
               $('#jadwal').DataTable();
               } );
            </script>
          </tbody>
      </table>
       <?php } ?>  
    </div>
  </div>
</body>
</html>