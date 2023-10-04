<?php 
//variabel koneksi mysql server 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "telepon";

//konek ke mysql server
$mysql = mysql_connect("$hostname", "$username", "$password", "$database");

//mengecek jika terjadi gagal koneksi
if (mysql_connect_errno()) {
	echo "koneksi ke mysql server gagal.";
	exit;
}
?>