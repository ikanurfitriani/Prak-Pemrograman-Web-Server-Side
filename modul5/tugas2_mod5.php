<?php
// membuat array
$angka = array(6, 21, 11, 33, 14, 5, 17);
$banyak_angka = count($angka);
$jumlah = array_sum($angka);
$ratarata = $jumlah/$banyak_angka;

// mencetak isi
echo "Banyak Anggota Array = ".$banyak_angka;
echo "<p>Jumlah Total Nilai Array = ".$jumlah."</p>";
echo "<p>Nilai Rata-Rata Array = ".$ratarata."</p>";
?>