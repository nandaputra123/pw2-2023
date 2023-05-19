<?php
    require_once 'class_kehidupan.php';

    $mewah = new Mewah("DPR", "Rubicon", 5000000000000);
    $sederhana = new Sederhana("Berusaha", "Berjaya",5000000);

    echo "Kehidupan Mewah:<br>";
    $mewah->getInfo();
    echo "<br>";

    echo "Kehidupan Sederhana:<br>";
    $sederhana->getInfo();
?>