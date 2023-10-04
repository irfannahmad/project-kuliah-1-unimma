<?php
require "koneksi.php";
$id = null;
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
}
if ($id == null) {
	header("location: index.php");
}
if (!empty($_POST)) {
	$id = $_POST['id'];
	$sql = "delete from buku_telepon where id='$id'";

//queri ke MySQL
	$result = mysqli_query($mysqli, $sql);

	header("location: index.php");
}
?>

<h3>Delete a user</h3>
<form method="POST" action="delete.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<p>Anda yakin akan menghapus?</p>
	<div>
		<button type="submit">Ya</button>
		<a href="index.php"> Tidak </a>
	</div>