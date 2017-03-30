<?php 
// this file will extend PArentClass.php

class Sedan extends Car {
	public $year;
	public $make;
	public $model;
	public $color;
	public $transmission;

	public function __construct($year, $make, $model, $color, $transmission) {
		parent::__construct($year, $make, $model);
		$this->color = $color;
		$this->transmission = $transmission;
	}

	public function __toString() {
		$ret = parent::__toString();
		$ret .= '. It is ' . $this->color . ' with a(n) ' . $this->transmission . ' transmission.';
		return $ret;
	}
}

?>