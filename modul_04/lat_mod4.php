<?php
	function luas_segitiga($alas, $tinggi) {
		return(0.5*$alas*$tinggi);
	}
	function luas_persegi_panjang($panjang, $lebar) {
		return($panjang*$lebar);
	}
	$segitiga = luas_segitiga(4, 5);
	$persegi_panjang = luas_persegi_panjang(3, 6);
	
	echo "Luas Segitiga: $segitiga";
	echo "<br>Luas Persegi panjang: $persegi_panjang";
?>