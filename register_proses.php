<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$telpon = $_POST['telpon'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$ip = $_SERVER['REMOTE_ADDR'];

$cekemail = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email'"));

if($cekemail > 0){
	echo '<script language="javascript">
	alert("Email Sudah Terdaftar");
	location.href="registrasi";
	</script>';
	exit();
}

$query = mysqli_query($koneksi,"INSERT INTO user VALUES ('','$nama','$telpon','$email','$password','$tempat_lahir','$tanggal_lahir','$alamat','$jenis_kelamin','$ip',NOW())") or die(mysql_error());

if($query){
	echo '<script language="javascript">
	alert("Registrasi Berhasil, Silahkan Login");
	location.href="index";
	</script>';
	exit();
}else{
	echo '<script language="javascript">
	alert("Registrasi Gagal");
	location.href="index";
	</script>';
	exit();
}


?>