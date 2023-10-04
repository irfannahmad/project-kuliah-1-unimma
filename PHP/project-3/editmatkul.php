<?php  
include "koneksi12.php";

$kode_mk = $_POST['kode_mk'];
$nama_matkul = $_POST['nama_matkul'];
$id = $_POST['id'];

$sql = "update mata_kuliah set kode_mk = '$kode_mk', nama_matkul = '$nama_matkul' where id = '$id'";

//fungsi input ke MySQL
$result = mysqli_query($mysqlii, $sql);

if ($result) {
	echo "SUKSES MENYIMPAN DATA
	<br>
	<a href = \"mata_kuliah.php\">KEMBALI KE HALAMAN DEPAN</a>";
}
else {
	echo "TERJADI KESALAHAN";
}
?>