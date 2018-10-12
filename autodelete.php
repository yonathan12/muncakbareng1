<?php
require 'koneksi.php';

$lama = 0;

$query = mysqli_query($koneksi, "DELETE FROM jadwal WHERE DATEDIFF(CURDATE(), dibuat) > $lama");
?>