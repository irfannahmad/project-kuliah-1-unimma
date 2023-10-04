<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Telepon</title>
</head>
<body>
<h2>Buku Telepon</h2>
<h3>Daftar Nama</h3>
<a href="tambah.php">Tambah </a> 
<a href="search.php">Cari</a>
<table border="1">
	<tr>
		<th>No</th> <th>Nama</th> <th>Alamat</th>
		<th>Telp</th> <th>Email</th> <th>Aksi</th> 
	</tr>
<?php 
include ".... .php";

//fungsi untuk menginputkan hasil query ke MySQL
$result = mysqli_query ($mysql, $sql);
$i = 1 

//perulangan while
while ($r=mysqli_fetch_assoc($...)) {?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $r['nama']; ?></td>
	<td><?php echo $r['alamat']; ?></td>
	<td><?php echo $r['telepon']; ?></td>
	<td><?php echo $r['email']; ?></td>
	<td><a href="from_edit.php?id=<?php echo $r['id']; ?>"></td>Edit</a>
	<a href="delete.php?id=<?php echo $r['id']; ?>"> Hapus </a>
</tr>
<?php $i++;
}
?>
</table>
</body>
</html>