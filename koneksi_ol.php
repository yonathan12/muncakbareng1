<?php
$host = "mysql.hostinger.co.id";
$user = "u170122856_mb";
$pass = "Naelyaya2012";
$db = "u170122856_mb";

$konek = mysql_connect($host,$user,$pass)or die(mysql_error);
$database = mysql_select_db($db);


?>