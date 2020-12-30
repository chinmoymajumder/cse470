<?php

namespace App\Models;

class cancelreservationmodal{

public $customernane;

public function setCustomername($name){

	$this->customernane = $name;

}

public function getCustomername(){

	return $this->customernane;

}

}