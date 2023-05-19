<?php
    class Kehidupan {
        protected $wah;
        protected $syukur;

        protected function __construct($wah, $syukur) {
            $this->wah = $wah;
            $this->syukur = $syukur;
        }

        protected function getInfo() {
            echo "Harta : " . $this->wah . "<br>";
            echo "Tahta : " . $this->syukur . "<br>";
        }
    }

    class Mewah extends Kehidupan {
        public $enak;

        public function __construct($wah, $syukur, $enak) {
            parent::__construct($wah, $syukur);
            $this->enak = $enak;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Kekayaan: " . $this->enak . "<br>";
        }
    }

    class Sederhana extends Kehidupan {
        public $percaya;

        public function __construct($wah, $syukur, $percaya) {
            parent::__construct($wah, $syukur);
            $this->percaya = $percaya;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Secukupnya: " . $this->percaya . "  rupiah<br>";
        }
    }

?>