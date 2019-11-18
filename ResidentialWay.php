<?php

require_once 'HighWay.php';

class ResidentialWay extends HighWay
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;
    public $currentVehicles = [];

    public function addVehicle($vehicle): string
    {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
        }
        return 'ok';
    }
}
