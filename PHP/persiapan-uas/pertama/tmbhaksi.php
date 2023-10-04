<?php 
include "koneksi.php"

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "insert into persiapan (nama, alamat) value ('$nama', '$alamat')";

// fungsi untuk menginputkan hasil queri ke mysql
$result = mysqli_query ($mysqli, $sql);

if ($result) {
	echo "sukses menyimpan data <br>
	<a href=\"index.php\"> lihat persiapan </a>";
} else {
	echo "terjadi keslahan";
}
?>