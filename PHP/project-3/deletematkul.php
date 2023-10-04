<?php
require "koneksi12.php";
$id = null;
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
}
if ($id == null) {
	header("location: mata_kuliah.php");
}
if (!empty($_POST)) {
	$id = $_POST['id'];
	$sql = "delete from mata_kuliah where id='$id'";

//queri ke MySQL
	$result = mysqli_query($mysqlii, $sql);

	header("location: mata_kuliah.php");
}
?>
<form method="POST" action="deletematkul.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<P>APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI?</P>
	<div>
		<button type="submit">Ya</button>
		<a href="mata_kuliah.php"> Tidak </a>
	</div>