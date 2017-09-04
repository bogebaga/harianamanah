<?php
error_reporting(0);


$server =  "localhost";
$username = "harj8127_amanah";
$password = "bismillah1";
$database = "harj8127_kendari";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka". mysql_error());

// buat variabel untuk validasi dari file fungsi_validasi.php


?>
