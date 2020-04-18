<?php 

/**
*
* Person Class
* -------------
* Show all methods of using 
	- Public 
	- Private 
	- Protected.
*
**/

	class Person {

	public $name;
	protected $driver_license;
	private $pin;



	function __construct($name) {
		$this->name = $name;
	}

	function get_name() {
		return $this->name;
	}


}


$confused = new Person("name");
echo $confused->get_name();


?> 