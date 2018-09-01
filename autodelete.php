<?php
include 'koneksi.php';

$lama = 1;
$query = mysqli_query($koneksi, "DELETE FROM jadwal WHERE DATEDIFF(CURDATE(),tanggal_naik) > $lama" );

?>