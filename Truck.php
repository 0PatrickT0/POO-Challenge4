<?php

require_once 'Vehicle.php';

//Truck.php
class Truck extends Vehicle
{

    // Attributs & Valeurs

    private string $energy;
    private int $storageCapacity;
    private int $cargo = 0;

    // Constructeur

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    // Méthodes

    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Get started !";
    }

    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $this->cargo++;
            $sentence .= "";
        }
        $sentence .= " I'm stopped ! ";
        return $sentence;
    }

    public function loading(): string
    {
        $sentence = "";
        if ($this->cargo < $this->storageCapacity) {
            $sentence .= "in filling";
            return $sentence;
        } else {
            $sentence .= "full";
            return $sentence;
        }
    }

    // Getters & Setters

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCargo(): int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo): void
    {
        $this->cargo = $cargo;
    }
}
