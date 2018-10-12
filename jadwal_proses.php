<?php
include 'koneksi.php';
session_start();
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
  session_destroy();
  header('location:index');
}

$gn_tujuan = $_POST['gunung'];
$cp = $_SESSION['nama'];
$telpon = $_POST['telpon'];
$tanggal_naik = $_POST['tanggal_naik'];
$naik_via = $_POST['naik_via'];
$tanggal_turun = $_POST['tanggal_turun'];
$turun_via = $_POST['turun_via'];
$tanggal_mp = $_POST['tanggal_mp'];
$jam_mp = $_POST['jam_mp'];
$mp = $_POST['mp'];
$keterangan = $_POST['keterangan'];
$tanggal = date("Y-m-d");
$ip = $_SERVER['REMOTE_ADDR'];
$username = $_SESSION['email'];
$status = 'TRUE';

$simpan = mysqli_query($koneksi, "INSERT INTO jadwal VALUES ('','$gn_tujuan','$naik_via','$turun_via','$tanggal_naik','$tanggal_turun','$mp','$tanggal_mp','$jam_mp','$cp','$telpon','$keterangan','$ip','$tanggal','$username','$status')");

if($simpan){
	echo '<script language="javascript">
	alert ("Jadwal Berhasil Disimpan");
	location.href="jadwal";
	</script>';
	exit();
}else{
	echo '<script language="javascript">
	alert ("Jadwal Gagal Disimpan");
	location.href="jadwal";
	</script>';
	exit();
}

?>