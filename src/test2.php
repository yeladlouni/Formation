<?php

class Car {
    private $color = "red";

    const VITESSE_MAXIMALE = 120;

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

$car = new Car();
$car->setColor("black");

echo $car->getColor();

echo $car::VITESSE_MAXIMALE;