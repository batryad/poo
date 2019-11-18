<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const CAPACITY_MAX = 30;
    const CAPACITY_INCR = 2;
    private $stockageCapacity = 0;
    protected $cargo;

    ////////////////////////////////////////////////////////////////////     STOCKAGE
    public function getStockageCapacity(): int
    {
        return $this->stockageCapacity;
    }

    public function setStockageCapacity(int $stockageCapacity)
    {
        $this->stockageCapacity = $stockageCapacity;
        return $this;
    }

    public function stockageMax(): bool
    {
        $result = false;
        if ($this->stockageCapacity >= self::CAPACITY_MAX) {
            $result = true;
        }
        return $result;
    }

    public function remplir()
    {
        if ($this->getStockageCapacity() < 30) {
            $this->setStockageCapacity($this->getStockageCapacity() + self::CAPACITY_INCR);
        }
    }

    ////////////////////////////////////////////////////////////////////     CARGAISON
    public function getCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function setCargo(): int
    {
        return $this->cargo;
    }
}