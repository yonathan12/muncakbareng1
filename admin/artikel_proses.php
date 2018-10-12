<?php
include '../koneksi.php';

$judul = $_POST['judul'];
$artikel = $_POST['artikel'];
$penulis = 'Yonathan';
$status = 'Y';
$tgl_buat = date("d-m-Y H:i:s");

$query = mysqli_query($koneksi, "INSERT INTO artikel VALUES('','$judul','$artikel','$penulis','$tgl_buat','$status')");
if ($query) {
	echo '<script language="javascript">
	alert ("Artikel Berhasil Disimpan");
	location.href="artikel";
	</script>';
	exit();
}else{
	echo '<script language="javascript">
	alert ("Artikel Gagal Disimpan");
	location.href="artikel";
	</script>';
	exit();
}
?>