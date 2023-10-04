<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MATA KULIAH</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body class="red">
<a href="index.php">Mahasiswa</a> |
<a href="mata_kuliah.php">Mata Kuliah</a> |
<a href="daftar_kuliah.php">Daftar Mata Kuliah Mahasiswa</a>
<h1 class="biru">DAFTAR MATA KULIAH</h1>
<table border="1">
	<tr>
		<th>NO</th> <th>KODE MATA KULIAH</th> 
		<th>NAMA MATA KULIAH</th> <th>AKSI</th>
	</tr>
<?php  
include "koneksi12.php";
$sql = "select * from mata_kuliah";

//fungsi input ke MySQL
$result = mysqli_query($mysqlii, $sql);
$i =1;

//while
while ($r = mysqli_fetch_assoc($result)) { ?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $r['kode_mk']; ?></td>
	<td><?php echo $r['nama_matkul']; ?></td>
	<td><a href="formeditmatkul.php?id=<?php echo $r['id']; ?>">Edit</a>
		<a href="deletematkul.php?id=<?php echo $r['id']; ?>">Hapus</a>
	</td>
</tr>
<?php $i++;
}
?>
</table>
<br>
<a href="tambahmatkul.php">Tambah Data</a>
</body>
</html>