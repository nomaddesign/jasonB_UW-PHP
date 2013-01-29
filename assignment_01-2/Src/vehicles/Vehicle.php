<?php

namespace vehicles;

require_once '/Library/Server/Web/Data/Sites/WebClass/442_PHP/jasonB_UW-PHP/assignment_01-2/bootstrap.php';

/**
* Abstract class to represent vehicles
* uses VehicleInterface Interface
*/
abstract class Vehicle {
	
	/**
	* Name of vehicle
	* @var string
	*/
	public $_name;
	
	/**
	* Number of doors
	* @var int
	*/
	protected $_numberOfDoors;
	
	/**
	* Return the number of doors
	* @return int
	*/
	abstract public function getNumberOfDoors();

}//END Class Vehicle

?>