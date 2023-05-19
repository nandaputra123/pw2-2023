<!DOCTYPE html>
<html lang="en">
<head class="huha">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data balok</title>
    <link rel="stylesheet" href="nanda.css">
    <style>
        .nanda {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: x-large;
    font-weight: bold;;
    background-color: #012E40;
    text-align: center;
    color: #F2E3D5;
}

    </style>
    
</head>
<body class="nanda">
	
</body>
</html>


<?php
        /**
         * Task 1
         * Buatlah class Calculator 2 bilangan
         * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
         * Tampilkan masing-masing method dengan object
         */
        class Calculator {
            public $bil1;
            public $bil2;

            public function __construct($bil_pertama1, $bil_kedua22) {
                    // code..
                $this->bil1 = $bil_pertama1;
                $this->bil2 = $bil_kedua22;
            }

                // Method lainnya
            public function Pertambahan() {
                $tambah = $this->bil1 + $this->bil2;
                return $tambah;
            }
            public function Pengurangan() {
                $kurang = $this->bil1 - $this->bil2;
                return $kurang;
            }
            public function Perkalian() {
                $kali = $this->bil1 * $this->bil2;
                return $kali;
            }
            public function Pembagian() {
                $bagi = $this->bil1 / $this->bil2;
                return $bagi;
            }
        }

            // Buat object dan tampilkan masing-masing method
            $calculator = new Calculator(10, 5);
            
        echo '<br><br><br><br><br><br><br><br><br>';
        echo '<hr>';
    
        echo '<br>Hasilnya = '.$calculator->Pertambahan(); echo ' | diambil dari 10 + 5';
        echo '<br>';
        echo '<br>Hasilnya = '.$calculator->Pengurangan(); echo ' | diambil dari 10 - 5';
        echo '<br>';
        echo '<br>Hasilnya = '.$calculator->Perkalian(); echo ' | diambil dari 10 * 5';
        echo '<br>';
        echo '<br>Hasilnya = ' . $calculator->Pembagian(); echo ' | diambil dari 10 / 5';
        echo '<hr>';
        
    ?>