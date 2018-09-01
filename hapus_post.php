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

$query = mysqli_query($koneksi, "DELETE from jadwal WHERE id='$id' AND username='$username'");

if ($query) {
	echo '<script language="javascript">
	alert ("Data berhasil di hapus");
	location.href="profil";
	</script>';
	exit();
} else {
	echo '<script language="javascript">
	alert ("Data gagal di hapus");
	location.href="profile";
	</script>';
	exit();
}

?>