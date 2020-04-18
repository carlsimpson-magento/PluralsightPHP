<?php

/**
*
* MyClass
* -------------
* Show all methods of using 

	- Public 
	- Private 
	- Protected.
*
**/


class VisibilityExample
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new VisibilityExample();

$obj->printHello(); // Shows Public, Protected and Private



//echo $obj->public; // Works
//echo $obj->protected; // Fatal Error
//echo $obj->private; // Fatal Error