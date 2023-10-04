<?php  
include "koneksi12.php";

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$mata_kuliah_mahasiswa = $_POST['mata_kuliah_mahasiswa'];
$id = $_POST['id'];

$sql = "update daftar_kuliah set nama_mahasiswa = '$nama_mahasiswa', mata_kuliah_mahasiswa = '$mata_kuliah_mahasiswa' where id = '$id'";

//fungsi input ke MySQL
$result = mysqli_query($mysqlii, $sql);

if ($result) {
	echo "SUKSES MENYIMPAN DATA
	<br>
	<a href = \"daftar_kuliah.php\">KEMBALI KE HALAMAN DEPAN</a>";
}
else {
	echo "TERJADI KESALAHAN";
}
?>