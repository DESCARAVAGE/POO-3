<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    //attributs
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    //méthodes abstract redéfinie
    public function addVehicle(Vehicule $vehicule)
    {
        if ($vehicule instanceof Bike) {
            echo "véhicule autorisé" . "<br>";
            $this->currentVehicles[] = $vehicule;
        } else {
            echo "Véhicule non autorisé" . "<br>";
        }
    }
}
