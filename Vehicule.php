<?php 
    class Vehicule 
    {
        public function __construct(string $color, int $nbSeats)
        {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
        }
         // Méthodes
    
        public function getColor(): string
        {
            return $this->color;
        }
    
        public function setColor(string $color): void
        {
            $this->color = $color;
        }
    
        public function getNbSeats(): int
        {
            return $this->nbSeats;
        }
    
        public function setNbSeats(int $nbSeats): void
        {
            $this->nbSeats = $nbSeats;
        }
    }
    // autre classes
    class Car extends Vehicule{}

    class Bike extends Vehicule{}

    class Skateboard extends Vehicule{}

?>