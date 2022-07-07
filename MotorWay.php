<?php

require_once 'HighWay.php';

// MotorWay.php
final class MotorWay extends HighWay
{

    // Attributs & Valeurs


    // Constructeur

    public function __construct(array $currentVehicles = [], int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    // Méthodes

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }


    // Getters & Setters

}
