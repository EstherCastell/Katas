<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Bowling;

class BowlingTest extends TestCase {
    
    public function test_bowling_game_with_10_frames() {
        $game = new Bowling();
        $newGame = $game->getFrames();
        $this->assertEquals(10, $newGame);
    }

    public function test_game_start_with_10_pins() {
        $game = new Bowling();
        $newGame = $game->getPins();
        $this->assertEquals(10, $newGame);

    }

}