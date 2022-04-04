<?php
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$motorWay = new Motorway();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$pickUp = new Car('red', 4);
$vtt = new Bike('yellow', 2);
$skate = new Bike('Brown', 0);

$motorWay->addVehicle($pickUp);
var_dump($motorWay->getCurrentVehicles());
echo '<br>';

$pedestrianWay->addVehicle($vtt);
var_dump($pedestrianWay->getCurrentVehicles());
echo '<br>';

$pedestrianWay->addVehicle($pickUp);
var_dump($pedestrianWay->getCurrentVehicles());
echo '<br>';

$residentialWay->addVehicle($skate);
var_dump($residentialWay->getCurrentVehicles());
echo '<br>';

?>
