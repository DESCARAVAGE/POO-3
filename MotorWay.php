<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    //attributs
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    //méthodes 
    public function addVehicle(Vehicule $vehicule)
    {
        if($vehicule instanceof Car) {
            echo "Véhicule est autorisé" . "<br>";
            $this->currentVehicles[] =$vehicule;
        }else{
            echo "Vehicule non autorisé" . "<br>";
        }
    }
}
