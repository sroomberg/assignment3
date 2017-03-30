<?php
// This is the file for the parent class

class Car {
	public $year;
	public $make;
	public $model;

	public function __construct($year, $make, $model) {
		$this->year = $year;
		$this->make = $make;
		$this->model = $model;
	}

	public function __toString() {
		return 'This car is a ' . $this->year . ' ' . $this->make . ' ' . $this->model;
	}
}

?>