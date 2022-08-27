<?php
require "persegipjg.php";
$objek = new persegipjg;

$objek->panjang = 30;
$objek->lebar = 20;

echo $objek->panjang . "<br>";
echo $objek->lebar . "<br>";

//proses memanggil method objek
echo $objek->getKeliling() . "<br>";
echo $objek->getLuas() . "<br>";
?>