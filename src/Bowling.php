<?php

namespace App;

class Bowling {

    private $frames = 10;
    private $pins = 10;
    private $score = 0;

    
    public function getFrames() {
        return $this->frames;
    }

    public function getPins() {
        return $this->pins;
    }

    public function play($pins) {
        $this->score += $pins;
    }
    
    public function score() {
        return 0;
    }
    /* public function spare(){

    } */
}