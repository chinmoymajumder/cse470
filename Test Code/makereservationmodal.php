<?php

namespace App\Models;

class makereservationmodal{

public $customernane;

public $guestnumber;

public function setCustomername($name){

	$this->customernane = $name;

}
public function setNumberofGuest($number){

	$this->guestnumber = $number;

}
public function getCustomername(){

	return $this->customernane;

}
public function getNumberofGuest(){

	return $this->guestnumber;

}

}