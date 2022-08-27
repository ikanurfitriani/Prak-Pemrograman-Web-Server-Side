<?php
require "persegipjg2.php";

$objek = new persegipjg2();
    $objek->panjang = 12;
    $objek->lebar = 4;
    $objek->tinggi = 5;

echo $objek->panjang . "<br>";
echo $objek->lebar . "<br>";
echo $objek->tinggi . "<br>";
echo "</br>";
echo "Volume = " . $objek->getVolum() . "<br>";
?>