<?php

class User 
{
	protected $name;

	public function __construct($name)
	{	
		$this->name = $name;
		echo "My name is {$this->name}";
	}
}