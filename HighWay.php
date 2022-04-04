<?php
require_once "Vehicule.php";
abstract class HighWay
{
    //Attributs 
    protected $currentVehicles;
    protected $nbLane;
    protected $maxSpeed;

    // abstract function 
    abstract public function addVehicle(Vehicule $vehicule);

    //méthodes la correction 

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}  


        //méthodes moi 
    /*public function __construct(int $nbLane, int $maxSpeed)
    {
       $this->currentVehicles = $currentVehicles;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    
     abstract protected function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
    /*public function setCurrentVehicles(array $currentVehicles):void
    {
        if($currentVehicles >= 0){
            $this->currentVehicles = $currentVehicles;
        }
    }
    
    abstract function getNbLane()
    {
        return $this->getNbLane;
    }
    abstract function setNbLane(int $nbLane):int 
    {
        return $this->nbLane;
    }
    abstract function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    abstract function setMaxSpeed(int $maxSpeed):int
    {
        return $this->maxSpeed;
    }
    abstract function  getAddVehicle(obj) */
