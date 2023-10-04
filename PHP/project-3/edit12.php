<?php  
include "koneksi12.php";

$npm = $_POST['npm'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$id = $_POST['id'];

$sql = "update mahasiswa set npm = '$npm', nama_mahasiswa = '$nama_mahasiswa' where id = '$id'";

//fungsi input ke MySQL
$result = mysqli_query($mysqlii, $sql);

if ($result) {
	echo "SUKSES MENYIMPAN DATA
	<br>
	<a href = \"index.php\">KEMBALI KE HALAMAN DEPAN</a>";
}
else {
	echo "TERJADI KESALAHAN";
}
?>