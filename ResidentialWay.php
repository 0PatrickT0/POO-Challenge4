<?php

require_once 'HighWay.php';

// ResidentialWay.php
final class ResidentialWay extends HighWay
{

    // Attributs & Valeurs


    // Constructeur

    public function __construct(array $currentVehicles = [], int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    // Méthodes

    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }


    // Getters & Setters

}
