<?php
//rincian DB
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'muncakbareng';

//Membuat koneksi dan memilih DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Tidak dapat menghubungkan database: " . $db->connect_error);
}
