<?php

class Timer
{
	private $mark = array();
	
	public function mark($point)
	{
		$this->mark[$point] = microtime(0);
	}

	public function calculate($pointA, $pointB)
	{
		return number_format($pointB - $pointA, 3);
	}
}
?>
