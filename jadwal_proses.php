<?php
include 'koneksi.php';
session_start();
$isLoggedIn = $_SESSION['isLoggedIn'];
if($isLoggedIn != '1'){
  session_destroy();
  header('location:index');
}

$gn_tujuan = $_POST['gunung'];
$naik_via = $_POST['naik_via'];
$turun_via = $_POST['turun_via'];
$tanggal_naik = $_POST['tanggal_naik'];
$tanggal_turun = $_POST['tanggal_turun'];
$mp = $_POST['mp'];
$tanggal_mp = $_POST['tanggal_mp'];
$jam_mp = $_POST['jam_mp'];
$cp = $_SESSION['nama'];
$telpon = $_POST['telpon'];
$keterangan = $_POST['keterangan'];
$ip = $_SERVER['REMOTE_ADDR'];

$simpan = mysql_query("INSERT INTO jadwal (gn_tujuan,naik_via,turun_via,tanggal_naik,tanggal_turun,mp,tanggal_mp,jam_mp,cp,telpon,keterangan,ip,dibuat) VALUES ('$gn_tujuan','$naik_via','$turun_via','$tanggal_naik','$tanggal_turun','$mp','$tanggal_mp','$jam_mp','$cp','$telpon','$keterangan','$ip',NOW())") or die(mysql_error());

if($simpan){
	echo '<script language="javascript">
	alert ("Jadwal Berhasil Disimpan");
	location.href="jadwal";
	</script>';
	exit();
}else{
	echo '<script language="javascript">
	alert ("Jadwal Gagal Disimpan");
	location.href="buat_jadwal";
	</script>';
	exit();
}

?>