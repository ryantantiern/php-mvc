<?php 

namespace MSCU\support;

spl_autoload_register(function ($className) {
	$path = explode('\\', $className);
	$filepath = $path[1];

	for ($i = 2; $i < count($path) ; $i++ ) { 
		$filepath .= DIRECTORY_SEPARATOR .  $path[$i] ;
	}
	$filepath .= '.php';
	require $filepath;
});