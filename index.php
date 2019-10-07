<?php
require_once 'Bicycle.php';
$bike = new Bicycle('rouge', 1);
$mustang = new Car('noir', 5,'essence');
$veloVeloce = new Bicycle('bleu', 1);
$voitureVeloce = new Car('jaune', 5, 'electrique');

echo $mustang->start();

var_dump($bike);
var_dump($mustang);

$bike->forward();
$mustang->forward();

var_dump($bike);
var_dump($mustang);

$bike->brake();
$mustang->brake();

var_dump($bike);
var_dump($mustang);
