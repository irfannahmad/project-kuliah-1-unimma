<?php
require "koneksi12.php";
$id = null;
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
}
if ($id == null) {
	header("location: daftar_kuliah.php");
}
if (!empty($_POST)) {
	$id = $_POST['id'];
	$sql = "delete from daftar_kuliah where id='$id'";

//queri ke MySQL
	$result = mysqli_query($mysqlii, $sql);

	header("location: daftar_kuliah.php");
}
?>
<form method="POST" action="deletematkulmahasiswa.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<P>APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI?</P>
	<div>
		<button type="submit">Ya</button>
		<a href="daftar_kuliah.php"> Tidak </a>
	</div>