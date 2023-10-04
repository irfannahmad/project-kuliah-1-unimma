<?php
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$sql = "INSERT INTO buku_telp (nama, alamat, telp, email)
VALUES ('$nama', '$alamat', '$telp', '$email')";
// Fungsi untuk menginputkan hasil queri ke MySQL
$result = mysql_query($mysqli, $sql);

if ($.....) {
	echo "Sukses menyimpan data;
	<br>
	<a href = \"index.php\"> Lihat Buku Telepon </a>";
}
else {
	echo "Terjadi Kesalahan";
}
?>