<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Bowling;

class BowlingTest extends TestCase {
    
    public function test_bowling_game_with_10_frames() {
        $game = new Bowling();
        $completGame = $game->getFrames();
        $this->assertEquals(10, $completGame);

    }


}