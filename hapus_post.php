<?php

session_start();
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
  session_destroy();
  header('location:index');
}

include 'koneksi.php';
$id = $_GET['id'];
$username = $_GET['email'];
$status = 'FALSE';

$query = mysqli_query($koneksi, "UPDATE jadwal SET status='$status' WHERE id='$id' AND username='$username'");
$query1 = mysqli_query($koneksi, "UPDATE komentar SET status='$status' WHERE idJadwal='$id'");

if ($query) {
	echo '<script language="javascript">
	alert ("Data berhasil di hapus");
	location.href="profil";
	</script>';
	exit();
} else {
	echo '<script language="javascript">
	alert ("Data gagal di hapus");
	location.href="profil";
	</script>';
	exit();
}

?>