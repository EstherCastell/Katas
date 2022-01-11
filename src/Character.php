<?php

namespace App;

class Character
{
   private $health = 1000;
   private $level = 1;
   private $alive = true;
   //private int $heal = 150;
   
   

   public function hit(int $damage, character $victim){
    $victim->damage($damage);   
    return $victim->getHealth();

   }
   public function damage($damage) 
   {
       if($this->health <= $damage){
        $this->isDeath();
        //$this->health = 0;
}  
    $this->health -= $damage;

    if ($this->health < 0){
        $this->health = 0;

    }
    }
    public function heal(int $damaged, Character $healer)
    {
        $healer->getHealth($damaged) + 150;
    }
    
    //public function heal($healing, Character $damaged)
    //{
       //$healer->heal($damaged);
       //return $healer->getHealth(150, $damaged);
       //$healh = $damaged->getHealth();
       //$healh += $healing;

    //}
   
   public function getHealth(): int
   {
       return $this->health;
   }
   
   public function isAlive(): bool
   {
       return $this->alive;
   }
   
   public function getLevel(): bool
   {
       return $this->level;
   }
   
   public function isDeath()
   {
       $this->alive=false;
   }


}
