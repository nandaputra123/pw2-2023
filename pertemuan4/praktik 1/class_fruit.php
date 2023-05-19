<?php

class Fruit {
//acces modifier (public, protected, private)
    //Propeerty
    public $name = "Apple";
    public $color = "red";

    //method
    function getName() {
        return $this->name;
        //this untuk memanggil property
    }

    function getColor() {

        return $this->color;
    }
}

//$apple = new Fruit ();
//$apple->name;

$apple = new Fruit ();
$apple->name = "Apple";
$apple->color = "Red";
echo $apple->getName();
//echo $apple->getColor();
echo $apple->getName() . "          " . $apple->getColor();

echo "<br><br>";


$apple = new Fruit ();
$apple->name = "Apple";
echo $apple->getName();


$banana = new Fruit ();
$banana->name = "banana";
echo $banana->getName();

?> 