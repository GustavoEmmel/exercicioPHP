<?php
require_once './Numbers.php';

class NumbersTest extends PHPUnit_Framework_TestCase {
    
    public function testMultiploDeTresVerdadeiro()
    {
    	$number = new Numbers();
    	$this->assertEquals("Fizz", $number->multiploDeTres(3));
    }
    
    public function testMultiploDeTresFalso()
    {
    	$number = new Numbers();
    	$this->assertEquals(2, $number->multiploDeTres(2));
    }
    
    public function testMultiploDeCincoVerdadeiro()
    {
    	$number = new Numbers();
    	$this->assertEquals("Buzz", $number->multiploDeCinco(5));
    }
    
    public function testMultiploDeCincoFalso()
    {
    	$number = new Numbers();
    	$this->assertEquals(2, $number->multiploDeCinco(2));
    }
    
    public function testMultiploDeTresECincoVerdadeiro()
    {
    	$number = new Numbers();
    	$this->assertEquals("FizzBuzz", $number->multiploDeTresECinco(15));
    }
    
    public function testMultiploDeTresECincoFalsoComTres()
    {
    	$number = new Numbers();
    	$this->assertEquals(3, $number->multiploDeTresECinco(3));
    }
    
    public function testMultiploDeTresECincoFalsoComCinco()
    {
    	$number = new Numbers();
    	$this->assertEquals(5, $number->multiploDeTresECinco(5));
    }

}