<?php
session_start();
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
  session_destroy();
  header('location:index');
}

include 'koneksi.php';

$nama = $_SESSION['nama'];
$komentar = $_POST['komentar'];
$id = $_GET['id'];
$tanggal = date("d-m-Y H:i:s");

$query = mysqli_query($koneksi,"INSERT INTO komentar VALUES('','$id','$nama','$komentar','$tanggal')");

if ($query) {
	header('location:detail.php?id='.$id);
} else {
	header('location:index');
}


?>