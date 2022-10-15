<?php
class persegipjg2 {
    public $panjang=0;
    public $lebar=0;
    public $tinggi=0;

    public function getKeliling() {
        return(2*($this->panjang + $this->lebar));
    }
    public function getLuas() {
        return($this->panjang * $this->lebar);
    }
    public function getVolum() {
        return($this->panjang * $this->lebar * $this->tinggi);
    }
}
?>