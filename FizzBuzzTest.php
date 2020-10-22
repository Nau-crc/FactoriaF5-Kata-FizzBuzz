<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;



class FizzBuzzTest extends TestCase {

	public function test_exampleFizz() 
	{
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz -> DivisiblePor3(3);
		$this->assertEquals("Fizz", $result);
	}

	public function test_FizzBuzz()
	{
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz -> DivisiblePor3(5);
		$this->assertEquals("Buzz", $result);
	}
}


$laura = new FizzBuzz();
$laura->printNumber();

?>