<?php
//variabel koneksi mysql server
$hostname = "localhost";
$username = "root";
$password = "";
$database = "telepon";

//konek ke mysql server
$mysqli = mysqli_connect("$hostname", "$username", "$password", "$database");

//mengecek jika terjadi gagal koneksi
if (!$mysqli) {
	echo "koneksi ke mysql server gagal.";
	exit;
}
?>