<?php 
    class Balok {
        private $panjangP;
        private $lebarL;
        private $tinggiT;

            public function __construct($panjangP, $lebarL, $tinggiT) {
                $this->panjangP = $panjangP;
                $this->lebarL = $lebarL;
                $this->tinggiT = $tinggiT;
            }

            public function getKeliling() {
                $keliling = 4 * ($this->panjangP + $this->lebarL + $this->tinggiT);
                return $keliling;
            }

            public function getLuas() {
                $luas = 2 * ($this->panjangP * $this->lebarL + $this->tinggiT * $this->lebarL + $this->panjangP * $this->tinggiT);
                return $luas;
            }

        
            public function getVolume() {
                $volume = $this->panjangP * $this->lebarL * $this->tinggiT;
                return $volume;
            }
    }
?>