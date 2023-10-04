<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$id = $_POST['id'];

$sql = "update buku_telepon set nama = '$nama', 
		alamat = '$alamat',
		telp = '$telp',
		email = '$email'
		where id ='$id' ";

//fungsi untuk menginputkan hasil queri ke MySQL
$result = mysqli_query($mysqli, $sql);

if ($result) {
	echo "Sukses Menyimpan Data <br>
	<center><a href =\"index.php\"> Lihat Buku Telepon </a></center>";
}
else {
	echo "Terjadi kesalahan";
}
?>