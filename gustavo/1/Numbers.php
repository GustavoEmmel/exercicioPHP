<?php

class Numbers {

	function __construct() {

		for( $i=1; $i<=100; $i++ ){
			
			$number = $i;
			
			$number = $this->multiploDeTresECinco($number);
			if (is_int($number)) {
				$number = $this->multiploDeCinco($number);
			}
			if (is_int($number)) {
				$number = $this->multiploDeTres($number);
			}

			echo $number;
			echo "<br>";

		}

	}

	public function multiploDeTres($number)
	{
		$number = (($number % 3) == 0) ? "Fizz" : $number;
		return $number;
	}

	public function multiploDeCinco($number)
	{
		$number = (($number % 5) == 0) ? "Buzz" : $number;
		return $number;
	}

	public function multiploDeTresECinco($number)
	{
		$number = (($number % 3) == 0 && ($number % 5) == 0) ? "FizzBuzz" : $number;
		return $number;
	}

}

$Numbers = new Numbers($_REQUEST);
