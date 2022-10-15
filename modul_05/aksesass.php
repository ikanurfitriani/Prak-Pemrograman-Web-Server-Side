<?php
$Praktikum = [
	"Matakuliah" => "Pemrograman Web Server",
	"Prodi" => "Teknik Informatika",
	"Kode" => 8709
];

// mencetak isi array assosiatif
foreach($Praktikum as $x => $x_value) {
	echo "" . $x . " : " . $x_value;
	echo "<br>";
}
?>