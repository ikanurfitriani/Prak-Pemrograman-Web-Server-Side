<?php
require "persegipjg.php";

class kotak extends persegipjg {
    public function Kotak() {
        if($this->panjang == $this->lebar) {
            return true;
        } else {
            return false;
        }
    }
}

$objek = new kotak;
$objek->panjang = 20;
$objek->lebar = 20;

if($objek->Kotak()) {
    echo "Ini adalah Kotak dengan cara Inheritance";
} else {
    echo "Ini adalah Persegi Panjang";
};
echo "<br/>";
echo "Luasan Kotak : ".$objek->getLuas();
?>