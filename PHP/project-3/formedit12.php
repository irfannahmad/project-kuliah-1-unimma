<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php  
include "koneksi12.php";
$id = $_GET['id'];
$sql = "select * from mahasiswa where id = '$id'";
//queri ke MySQL
$result = mysqli_query($mysqlii, $sql);
$r = mysqli_fetch_assoc($result);
?>
<h2>SILAHKAN MASUKKAN DATA</h2>
<form method="post" action="edit12.php">
<input type="hidden" name="id" value="<?php echo $r['id']; ?>">
<table>
	<tr>
		<td>NPM</td> <td><input type="text" name="npm" value="<?php echo $r['npm']; ?>"></td>
	</tr>
	<tr>
		<td>NAMA</td> <td><input type="text" name="nama_mahasiswa" value="<?php echo $r['nama_mahasiswa']; ?>"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="simpan" value="Simpan"></td>
	</tr>
</table>
</form>
</body>
</html>