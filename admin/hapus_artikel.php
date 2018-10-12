<?php
include '../koneksi.php';

$id = $_GET['id'];
$sql = mysqli_query($kon, "DELETE FROM artikel WHERE id='$id'");
if ($sql) {
	header("location:artikel");
}else{
	header("location:artikel");
}
?>