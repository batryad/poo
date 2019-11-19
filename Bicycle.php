<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): Bool
    {
        if ($this->currentSpeed >= 10) {
            return True;
        }
        else {
            return False;
        }
    }

    public function switchOff()
    {
        return False;
    }
}