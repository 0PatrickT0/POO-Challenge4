<?php
// index.php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

// Instanciation
$car = new Car('grey', 4, 'electric');
echo $car->forward();
var_dump($car);

// Moving car
try {
    $car->start();
} catch (Exception $e) {
    echo '<br> Exception : ' . $e->getmessage();
    echo '<br> Retirer le frein à main';
    $car->setParkBrake(false);
} finally {
    echo '<br>' . $car->forward();
    echo '<br> Ma voiture roule comme un donut';
}
