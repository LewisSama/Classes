<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
$bike = new Bicycle('rouge', 1);
$mustang = new Car('noir', 5,'fuel');
$veloVeloce = new Bicycle('bleu', 1);
$voitureVeloce = new Car('jaune', 5, 'electric');
$grosCamion = new Truck('blue', 2, 'fuel', 80);
$grosCamionRempli = new Truck('red', 2, 'fuel', 100);

var_dump($grosCamionRempli);
$grosCamionRempli->setStock(100);
var_dump($grosCamionRempli);
echo $grosCamionRempli->isTruckFull();

$grosCamionRempli->forward();
var_dump($grosCamionRempli);
$grosCamionRempli->brake();
var_dump($grosCamionRempli);