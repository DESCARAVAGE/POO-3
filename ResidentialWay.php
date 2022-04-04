<?php


require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    //attributs 
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    //méthodes 
    public function addVehicle(Vehicule $vehicule)
    {
        if ($vehicule instanceof Vehicule) {
            echo "Véhicule est autorisé."."</br>";
            $this->currentVehicles[] = $vehicule;
        } else {
            echo "Véhicule non autorisé"."</br>";
        }
    }
}