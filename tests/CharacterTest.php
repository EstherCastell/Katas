<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;



class CharacterTest extends TestCase
{
    public function test_Heath_startin_at_1000() {
        $fighter = new Character();
        $result = $fighter->getHealth();
        $this->assertEquals(1000, $result);
    }

    public function test_level_startin_at_1() {
        $fighter = new Character();
        $result = $fighter->getLevel();
        $this->assertEquals(1, $result);
    }
    public function test_startin_alive() {
        
        $fighter = new Character();
        $result = $fighter->isAlive();
        $this->assertTrue(true, $result);
    }
    public function test_character_can_damage_and_substract_health(){
        $attaker = new Character();
        $damaged = new Character();

        $attaker->hit(100, $damaged);
        $this->assertEquals(900, $damaged->getHealth());
    }
    public function test_character_die(){
        $damaged = new Character();
        $attaker = new Character();

        $attaker->hit(1000, $damaged);
        $isAlive = $damaged->isAlive();
        $this->assertEquals(0, $damaged->getHealth());
        $this->assertFalse($isAlive);

    }
    public function test_character_heal_a_character(){
        $healer = new Character();
        $damaged = new Character ();

        //$damaged->$damaged(200);
        $healer->heal(150, $damaged);
        $this->assertEquals(1000,$damaged->getHealth());
    }

}

	
