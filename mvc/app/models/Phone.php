<?php 

class Phone 
{
	protected $number;

	public function __construct($number)
	{	
		$this->number = $number;
		echo "My phone number is {$this->number}";
	}
}