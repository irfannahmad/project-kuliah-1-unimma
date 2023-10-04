<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TAMBAH DATA MATA KULIAH MAHASISWA</title>
</head>
<body>
<h2>SILAHKAN MASUKKAN DATA</h2>
<form method="post" action="tambahmatkulmahasiswaaksi.php">
	<table>
		<tr>
			<td>NAMA MAHASISWA</td>
			<td><input type="text" name="nama_mahasiswa"></td>
		</tr>
		<tr>
			<td>NAMA MATA KULIAH</td>
			<td><input type="text" name="mata_kuliah_mahasiswa"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="simpan" value="Simpan"></td>
		</tr>
	</table>
</form>
</body>
</html>