<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Tugas PHP </title>
</head>
<body>
<?php 
$nama = "Irfan Ahmad Hidayat";
$npm = "21.0504.0008";
$prodi = "Teknik Informatika S-1";

$nilai_web_programming = 95;
$nilai_database = 85;
$nilai_math_discrith = 100; 

	echo "<h1> Data Diri Mahasiswa </h1>";
	echo "Nama Mahasiswa = " .$nama, "<br>";
	echo "NPM = " .$npm, "<br>";
	echo "Program Studi = " .$prodi, "<br> <br>";

	echo "Nilai Pemrogramman Web 1 = " .$nilai_web_programming, "<br>";
	echo "Nilai Basis Data = " .$nilai_database, "<br>";
	echo "Nilai Matematika Diskrit = " .$nilai_math_discrith, "<br> <br>";
$total_nilai = $nilai_web_programming + $nilai_database + $nilai_math_discrith;
$rata_rata = $total_nilai/3;
	echo "Total Nilai = " .$total_nilai, "<br>";
	echo "Rata-Rata Total Nilai = " .$rata_rata;
 ?>
</body>
</html>
