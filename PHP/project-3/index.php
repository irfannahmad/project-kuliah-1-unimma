<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body class="red">
<a href="index.php">Mahasiswa</a> |
<a href="mata_kuliah.php">Mata Kuliah</a> |
<a href="daftar_kuliah.php">Daftar Mata Kuliah Mahasiswa</a>
<h1 class="biru">DAFTAR MAHASISWA</h1>
<table border="1">
	<tr>
		<th>NO</th> <th>NPM</th> 
		<th>NAMA</th> <th>AKSI</th>
	</tr>
<?php  
include "koneksi12.php";
$sql = "select * from mahasiswa";

//fungsi input ke MySQL
$result = mysqli_query($mysqlii, $sql);
$i =1;

//while
while ($r = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $r['npm']; ?></td>
	<td><?php echo $r['nama_mahasiswa']; ?></td>
	<td><a href="formedit12.php?id=<?php echo $r['id']; ?>">Edit</a>
		<a href="delete12.php?id=<?php echo $r['id']; ?>">Hapus</a>
	</td>
</tr>
<?php $i++;
}
?>
</table>
<br>
<a href="tambahmhs.php">Tambah Data</a>
</body>
</html>