<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
include "koneksi.php";
$id = $_GET['id'];
$sql = "select * from buku_telepon where id = '$id'";
//queri ke MySQL
$result = mysqli_query($mysqli, $sql);
$r = mysqli_fetch_assoc($result);
?>
<h2>Buku Telepon</h2>
<h3>Form Edit</h3>
<form method="post" action="edit.php">
<input type="hidden" name="id" value="<?php echo $r['id']; ?>">
<table>
	<tr>
		<td>Nama</td> <td><input type="text" name="nama" value="<?php echo $r['nama']; ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td> <td><input type="text" name="alamat" value="<?php echo $r['alamat']; ?>"></td>
	</tr>
	<tr>
		<td>Telepon</td> <td><input type="text" name="telp" value="<?php echo $r['telp']; ?>"></td>
	</tr>
	<tr>
		<td>Email</td> <td><input type="text" name="email" value="<?php echo $r['email']; ?>"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="Submit" name="Simpan"></td>
	</tr>
</table>
</body>
</html>