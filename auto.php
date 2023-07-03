<?php

class Auto {
    public $marca;
    public $motore;
    public static $counter = 0;

    public function __construct($_marca, $_motore) {
        $this->marca = $_marca;
        $this->motore = $_motore;
        self::$counter++;
    }

    public static function howManyCars () {
        var_dump("hai costruito " . self::$counter . " autovetture");
    }
}

$auto1 = new Auto("fiat", "benzina");
$auto2 = new Auto("tesla", "elettrico");
var_dump($auto1);
var_dump($auto2);
Auto::howManyCars();  