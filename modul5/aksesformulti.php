<?php
// array 2 dimensi menggunakan array asosiatif
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
for($i=0; $i < count($Praktikum); $i++){
	echo "<h2>".$Praktikum[$i]["Matakuliah"]."</h2>";
	echo "<p>".$Praktikum[$i]["Prodi"]."<p>";
	echo "<p>".$Praktikum[$i]["Kode"]."<p>";
	echo "<hr>";
}
?>