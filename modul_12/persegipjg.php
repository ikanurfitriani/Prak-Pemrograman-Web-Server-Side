<?php
class persegipjg {
    public $panjang=0;
    public $lebar=0;

    public function getKeliling() {
        return(2*($this->panjang + $this->lebar));
    }
    public function getLuas() {
        return($this->panjang * $this->lebar);
    }
}
?>