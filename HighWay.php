<?php
abstract class HighWay
{
    abstract protected function addVehicle($vehicle) : string;
    protected $nbLane;
    protected $maxSpeed;
    public $currentVehicles = [];
    public function currentVehicles() : array
    {
        return $this->currentVehicles;
    }
    protected function getnbLane()
    {
        return $this->nbLane;
    }
    protected function setnbLane(int $nbLane) : int
    {
        $this->nbLane = $nbLane;
        return $nbLane;
    }
    public function getmaxSpeed()
    {
        return $this->maxSpeed;
    }
    public function setmaxSpeed(int $maxSpeed) : int
    {
        $this->maxSpeed = $maxSpeed;
        return $maxSpeed;
    }
    //abstract public function ()
}