<?php
require_once 'HighWay.php';

class PedestrianWay extends HighWay
{
    protected $maxSpeed = 10;
    protected $nbLane = 1;
    public $currentVehicles = [];

    public function addVehicle($vehicle): string
    {
        if ($vehicle instanceof Bicycle or $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
        return "no car here";
    }
}