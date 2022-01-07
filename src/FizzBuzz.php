<?php

namespace app;


class FizzBuzz {
    public function execute($num)
    {
        if ($num % 5 === 0 && $num % 3 === 0) return 'FizzBuzz';
        if ($num % 3 === 0) return 'Fizz';
        if ($num % 5 === 0) return 'Buzz';
        return $num;

    }
    //refactorizar

    private function is3Multiple($num, $divisor){
        if ($num % $divisor === 0)
            return true;
            return false;

    }

}