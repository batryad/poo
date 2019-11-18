<?php

require_once 'HighWay.php';
require_once 'Cars.php';

class MotorWay extends HighWay
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;
    public $currentVehicles = [];

    public function addVehicle($vehicle): string
    {
        if ($vehicle instanceof Cars) {
            $this->currentVehicles[] = $vehicle;
        }
        return 'ok';
    }
}
