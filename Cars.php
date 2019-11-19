<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Cars extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, int $currentSpeed, string $energy)
    {
        parent::__construct($color, $nbSeats, $currentSpeed);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Cars
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function switchOn(): Bool
    {
            return True;
    }

    public function switchOff()
    {
        return False;
    }
}
