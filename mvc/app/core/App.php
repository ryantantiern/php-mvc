<?php

class App
{
	/**
	 * Set default Controller, Method and Parameters
	 */
	protected $controller = 'HomeController'; 

	protected $method = 'index';

	protected $params = [];	 

	public $DB = [
		'CONNECTION' => 'mysql',
		'PORT' => '3306',
		'HOST' => 'localhost',
		'DBNAME' => 'mvc',
		'USERNAME' => 'root',
		'PASSWORD' => '',
	];
 
	public function __construct()
	{
		// Returns format {controller}/{index}/{x}/{y}/..
		$url = $this->parseUrl();

		if (file_exists('../app/controllers/' . ucfirst(strtolower($url[0])) . 'Controller.php')) // Set Controller if it exists
		{	
			$this->controller = ucfirst(strtolower($url[0])) . 'Controller';
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';

		$this->controller = new $this->controller;

		if (isset($url[1])) 
		{
			if (method_exists($this->controller, $url[1])) // Set Method if it exists
			{
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : []; // Set Params if it exists

		call_user_func_array([$this->controller, $this->method], $this->params);

/*		$db = Database::connect($this->DB);
		$result = $db->query('SELECT * from users');
		echo '<pre>';
			print_r(json_encode($result->fetchAll(PDO::FETCH_ASSOC)));
		echo '</pre>';*/

	/*	foreach ($db->query('SELECT * from users') as $row) {
			print_r($row);
		}*/
		$db = null;
		

	}

	protected function parseUrl()
	{
		if (isset($_GET['url'])) {
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}