<?php  
include "koneksi12.php";

$npm = $_POST['npm'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];

$sql = "insert into mahasiswa (npm, nama_mahasiswa) values ('$npm', '$nama_mahasiswa')";

//input hasil ke MySQL
$result = mysqli_query($mysqlii, $sql);
 if ($result) {
 	echo "SUKSES MENYIMPAN DATA
 	<br>
 	<a href =\"index.php\"> KEMBALI KE HALAMAN DEPAN </a>";
 }
?>