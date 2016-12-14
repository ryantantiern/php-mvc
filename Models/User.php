<?php 

namespace MSCU\Models;

Class User {

	function __construct($firstname, $lastname)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		print "Hello {$firstname} {$lastname} !";

	}

	function getFullName()
	{
		return "{$this->firstname} {$this->lastname}";
	}

}