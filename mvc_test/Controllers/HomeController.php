<?php 

namespace MSCU\Controllers;

Class HomeController {

	function index($params) 
	{
		require 'Views/home.php';
	}

	function fullName($params)
	{
		require 'Views/name.php';
	}


}