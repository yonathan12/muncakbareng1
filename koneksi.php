<?php
$koneksi = mysqli_connect("localhost","root","","muncakbareng");
//cek koneksi
if (mysqli_connect_errno()) {
	# code...
	echo "Koneksi Gagal".mysqli_connect_error();
}
?>