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
foreach($Praktikum as $post) {
	echo "<h2>".$post["Matakuliah"]."</h2>";
	echo "<p>".$post["Prodi"]."<p>";
	echo "<p>".$post["Kode"]."<p>";
	echo "<hr>";
}
?>