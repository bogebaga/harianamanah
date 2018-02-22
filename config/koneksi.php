<?php
// $server = "harianamanah.com";
// $username = "amanah";
// $password = "@amanah99";
$server = "localhost";
$username = "root";
$password = "mysql";
$database = "harianamanah";

// Koneksi dan memilih database di server

$link = mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

// mysql_close($link);
?>
