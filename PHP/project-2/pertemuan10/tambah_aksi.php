<?php
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$sql = "insert into buku_telepon (nama, alamat, telp, email) values ('$nama', '$alamat', '$telp', '$email')";

//fungsi untuk menginputkan hasil queri ke MySQL
$result = mysqli_query($mysqli, $sql);

if ($result) {
	echo "Sukses menyimpan data
	<br>
	<a href = \"index.php\"> Lihat Buku Telepon </a>";
}
?>