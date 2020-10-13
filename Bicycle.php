<?php

class Bicycle extends Vehicule{

    private $nbSeats=1;

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

}