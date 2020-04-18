<?php 

/**
*
* Constructors
* -------------
* A constructor allows you to initialize an object's properties upon creation of the object.
*
**/

class Product {

public $name;
public $sku;
public $size;
public $price;

	function __construct($name, $sku, $size, $price){
		$this->name = $name;
		$this->sku = $sku;
		$this->size = $size;
		$this->price = $price;
	}

	function get_name(){
		return $this->name;
	}
	function get_sku(){
		return $this->sku;
	}
	function get_size(){
		return $this->size;
	}
	function get_price(){
		return $this->price;
	}

}

$shirt = new Product("Blue Collar","SKU00001","Large","£19.99");

echo "<ul>";
echo "<li>".$shirt->get_name()."</li>";
echo "<li>".$shirt->get_sku()."</li>";
echo "<li>".$shirt->get_size()."</li>";
echo "<li>".$shirt->get_price()."</li>";
echo "</ul>";
?>