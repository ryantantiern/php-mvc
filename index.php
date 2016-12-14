<?php
/**
 * Handle URIs
 */
namespace MSCU;

require 'support/class_injection.php';

/**
 * Convert URI into an array of strings
 * @param  String $BASEPATH 
 * @return Array  
 */

function getUriParams ($BASEPATH) 
{
	$uri = trim(substr($_SERVER['REQUEST_URI'], strlen($BASEPATH)), '/');
	if (strstr($uri, '?')) $uri = substr($uri, strpos($urim, '?'));
	$params = explode('/' , $uri);
	return $params;
}


$BASEPATH = '/mscu-api-php';
$params = array();
$uri_params = getUriParams($BASEPATH);

foreach ($uri_params as $param) {
	if (trim($param) != ''){
		array_push($params, $param);
	}
}

if (!empty($params)){
	if (isset($routes[$params[0]])) {
		var_dump($params);
		die();
		$routes[$params[0]];
		
	}
}




$routes = [
	'home' => Controllers\HomeController::index($parameters),
	'search' => [
					'name' => Controllers\HomeController::fullName(array_splice($params, 2)),
				],
];





