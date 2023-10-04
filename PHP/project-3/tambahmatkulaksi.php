<?php  
include "koneksi12.php";

$kode_mk = $_POST['kode_mk'];
$nama_matkul = $_POST['nama_matkul'];

$sql = "insert into mata_kuliah (kode_mk, nama_matkul) values ('$kode_mk', '$nama_matkul')";

//input hasil ke MySQL
$result = mysqli_query($mysqlii, $sql);
 if ($result) {
 	echo "SUKSES MENYIMPAN DATA
 	<br>
 	<a href =\"mata_kuliah.php\"> KEMBALI KE HALAMAN DEPAN </a>";
 }
?>