<?php
//variabel koneksi mysql server
$hostname = "localhost";
$username = "root";
$password = "";
$database = "12";

//konek ke mysql server
$mysqlii = mysqli_connect("$hostname", "$username", "$password", "$database");

//mengecek jika terjadi gagal koneksi
if (!$mysqlii) {
	echo "koneksi ke mysql server gagal.";
	exit;
}
?>