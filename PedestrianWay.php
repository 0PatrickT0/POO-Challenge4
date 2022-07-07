<?php

require_once 'HighWay.php';

// PedestrianWay.php
final class PedestrianWay extends HighWay
{

    // Attributs & Valeurs


    // Constructeur

    public function __construct(array $currentVehicles = [], int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    // Méthodes

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
        } elseif ($vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }


    // Getters & Setters

}
