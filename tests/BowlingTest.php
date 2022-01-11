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
        $game->getPins();
        
        $this->assertEquals(10, $game);
    }

    public function test_score_start_0() {
        $game = new Bowling();

        for ($i=0; $i < 20; $i++) { 
            $game->play(0);
        }
        $this->assertEquals(0, $game->score());
    }
    
    public function test_player_can_score_20() {
        $game = new Bowling();

        for ($i=0; $i < 20; $i++) { 
            $game->play(1);
        }
        $this->assertEquals(20, $game->score());
    }
    
    /* public function test_player_can_make_spare() {
        $game = new Bowling();
        
        $this->assertTrue("spare"('false'));

    } */
}