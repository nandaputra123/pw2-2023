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
    background-color: #7B8FA1;
    text-align: center;
    color: black;
}

    </style>
    
</head>
<body class="nanda">
	
</body>
</html>



<?php

    require_once 'class_balok.php';
    echo '<br><br>';
    echo '<hr>';

    $balok_satu = new Balok(29, 16, 7);
    echo "<br>Balok satu dengan p = 29, l = 16, t = 7";
    echo '<br>Luas dari balok satu = '.$balok_satu->getLuas();
    echo '<br>Keliling dari balok satu = '.$balok_satu->getKeliling();
    echo '<br>Volume dari Balok 1 = '.$balok_satu->getVolume();

    echo '<br>';
    echo '<hr>';

    $balok_dua = new Balok(50, 20, 63);
    echo "<br>Balok dua dengan p = 50, l = 20, t = 63";
    echo '<br>Luas dari balok dua = '.$balok_dua->getLuas();
    echo '<br>Keliling dari balok dua = '.$balok_dua->getKeliling();
    echo '<br>Volume dari Balok dua = '.$balok_dua->getVolume();

    echo '<br>';
    echo '<hr>';

    $balok_tiga = new Balok(90, 32, 18);
    echo "<br>Balok tiga dengan p = 90, l = 32, t = 18";
    echo '<br>Luas dari balok tiga = '.$balok_tiga->getLuas();
    echo '<br>Keliling dari balok tiga = '.$balok_tiga->getKeliling();
    echo '<br>Volume dari Balok tiga = '.$balok_tiga->getVolume();

    echo '<br>';
    echo '<hr>';

    $balok_empat = new Balok(45, 6, 8);
    echo "<br>Balok empat memiliki p = 45, l = 6, t = 8";
    echo '<br>Luas dari balok empat = '.$balok_empat->getLuas();
    echo '<br>Keliling dari balok empat = '.$balok_empat->getKeliling();
    echo '<br>Volume dari Balok empat = '.$balok_empat->getVolume();
    

    echo '<br>';
    echo '<hr>';

    ?>

