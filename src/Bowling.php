<?php

namespace App;

class Bowling {

    private $frames = 10;
    private $pins = 10;

    
    public function getFrames() {
        return $this->frames;
    }

    public function getPins() {
        return $this->pins;
    }

}