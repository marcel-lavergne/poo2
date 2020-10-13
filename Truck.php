<?php
class Truck extends Vehicule{
    private $energy;
    private $energyLevel;
    private $nbSeats;
    private $storageCapacity;
    private $cargo = 0;


    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function __construct($color,$nbSeats,$energy,$storageCapacity)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function load(){
        return $this->cargo += 30;
    }
    public function full(){
        if ($this->cargo>= $this->storageCapacity){
            echo 'full';
        }else{
            echo 'in filling';
        }
    }

}