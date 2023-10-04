<?php  
include "koneksi12.php";

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$mata_kuliah_mahasiswa = $_POST['mata_kuliah_mahasiswa'];

$sql = "insert into daftar_kuliah (nama_mahasiswa, mata_kuliah_mahasiswa) values ('$nama_mahasiswa', '$mata_kuliah_mahasiswa')";

//input hasil ke MySQL
$result = mysqli_query($mysqlii, $sql);
 if ($result) {
 	echo "SUKSES MENYIMPAN DATA
 	<br>
 	<a href =\"daftar_kuliah.php\"> KEMBALI KE HALAMAN DEPAN </a>";
 }
?>