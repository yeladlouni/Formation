<?php

class Animal {
    protected $color;
    protected $category;

    function __construct() {
        $this->color = "ابيض";
        $this->category = "حيوان";
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function move() {
        return "يتحرك";
    }
}

class Reptile extends Animal {
    public function move() {
        return "يزحف";
    }
}

class Bird extends Animal {
    public function move() {
        return "يطير";
    }
}

class Amphibian extends Animal {
    public function move() {
        return "يغوص ويمشي";
    }
}

class Fish extends Animal {
    function __construct() {
        $this->color = "رمادي";
    }

    public function move() {

        return "يغوص";
    }
}

$fish = new Fish();
echo $fish->getColor();