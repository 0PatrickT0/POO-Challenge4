<?php

// HighWay.php

abstract class HighWay
{

    // Attributs & Valeurs

    protected array $currentVehicles;

    protected int $nbLane;

    protected int $maxSpeed;

    // Constructeur

    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    // Méthodes

    abstract public function addVehicle(Vehicle $vehicle);

    // Getters & Setters

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicle): void
    {
        $this->currentVehicle = $currentVehicle;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}
