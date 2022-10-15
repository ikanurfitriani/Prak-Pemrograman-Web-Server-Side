<?php
$Praktikum = [
	[
		"Matakuliah" => "Pemrograman Web Server",
		"Prodi" => "Teknik Informatika",
		"Kode" => 8709
	],
	[
		"Matakuliah" => "Manajemen Sistem Informasi",
		"Prodi" => "Sistem Informasi",
		"Kode" => 5711
	],
	[
		"Matakuliah" => "Pemrograman Server",
		"Prodi" => "Manajemen Informatika",
		"Kode" => 1279
	],
];

// menampilkan array
foreach ($Praktikum as $obj_key => $kuliah) {
	echo "Praktikum:<br>";
	foreach ($kuliah as $key => $value) {
		echo "$key: $value<br>";
	}
	echo "<br>";
}
?>