<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Telepon</title>
</head>
<body>
<h2>Buku Telepon</h2>
<h3>Daftar Teman</h3>
<a href="tambah.php">Tambah</a> |
<a href="search.php">Cari</a>
<table border="1">
	<tr>
		<th>No</th> <th>Nama</th> <th>Alamat</th>
		<th>Telp</th> <th>Email</th> <th>Aksi</th>
	</tr>
<?php
include "koneksi.php";
$sql = "select * from buku_telepon";

//fungsi untuk menginoutkan hasil queri ke MySQL
$result = mysqli_query($mysqli, $sql);
$i = 1;

//perulangan while 
while ($r = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $r['nama']; ?></td>
	<td><?php echo $r['alamat']; ?></td>
	<td><?php echo $r['telp']; ?></td>
	<td><?php echo $r['email']; ?></td>
	<td><a href="form_edit.php?id=<?php echo $r['id']; ?>">Edit</a>
		<a href="delete.php?id=<?php echo $r['id']; ?>">Hapus</a></td>
</tr>
<?php $i++;
}
?>
</table>
</body>
</html>