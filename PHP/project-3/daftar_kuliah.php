<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MATA KULIAH YANG DIIKUTI OLEH MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body class="red">
<a href="index.php">Mahasiswa</a> |
<a href="mata_kuliah.php">Mata Kuliah</a> |
<a href="daftar_kuliah.php">Daftar Mata Kuliah Mahasiswa</a>
<h1 class="biru">DAFTAR MATA KULIAH YANG DIIKUTI OLEH MAHASISWA</h1>
<table border="1">
	<tr>
		<th>NO</th> <th>NAMA MAHASISWA</th> 
		<th>MATA KULIAH YANG DIIKUTI MAHASISWA</th> <th>AKSI</th>
	</tr>
<?php  
include "koneksi12.php";
$sql = "select * from daftar_kuliah";

//fungsi input ke MySQL
$result = mysqli_query($mysqlii, $sql);
$i =1;

//while
while ($r = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $r['nama_mahasiswa']; ?></td>
	<td><?php echo $r['mata_kuliah_mahasiswa']; ?></td>
	<td><a href="formeditmatkulmahasiswa.php?id=<?php echo $r['id']; ?>">Edit</a>
		<a href="deletematkulmahasiswa.php?id=<?php echo $r['id']; ?>">Hapus</a>
	</td>
</tr>
<?php $i++;
}
?>
</table>
<br>
<a href="tambahmatkulmahasiswa.php">Tambah Data</a>
</body>
</html>