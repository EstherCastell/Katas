<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;


class FizzBuzzTest extends TestCase {

	public function test_returns_fizz_if_is_3_multiple(
	) {
		//Given: dando una clase new Fizz
		$fizzbuzz = new FizzBuzz();
		//When: ejecutando el resultado es igual a Fizz y ejecuta 3
		$result = $fizzbuzz->execute(3);
		//then: espero que el resultado sea Fizz
		$this->assertEquals("Fizz", $result);
		//$this->ass aparecen las opciones posibles )assert=comprobar
	}
	public function test_returns_buzz_if_is_5_multiple() 
	{
			//Given: dando una clase new Buzz
			$fizzbuzz = new FizzBuzz();
			//When: ejecutando el resultado es igual a Buzz y ejecuta 5
			$result = $fizzbuzz->execute(5);
			//then: espero que el resultado sea Buzz
			$this->assertEquals("Buzz", $result);
			//$this->ass aparecen las opciones posibles )assert=comprobar
		}
		public function test_returns_fizzbuzz_if_is_5_and_3_multiple() 
		{
				//Given: dando una clase new Buzz
				$fizzbuzz = new FizzBuzz();
				//When: ejecutando el resultado es igual a Buzz y ejecuta 5
				$result = $fizzbuzz->execute(15);
				//then: espero que el resultado sea Buzz
				$this->assertEquals("FizzBuzz", $result);
				//$this->ass aparecen las opciones posibles )assert=comprobar
			}
			public function test_returns_fizzbuzz_if_is_not_5_and_3_multiple() 
			{
					//Given: dando una clase new Buzz
					$fizzbuzz = new FizzBuzz();
					//When: ejecutando el resultado es igual a Buzz y ejecuta 5
					$result = $fizzbuzz->execute(1);
					//then: espero que el resultado sea Buzz
					$this->assertEquals(1, $result);
					//$this->ass aparecen las opciones posibles )assert=comprobar
				}


}


