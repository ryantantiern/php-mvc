<?php

class App
{
	/**
	 * Set default Controller, Method and Parameters
	 */
	protected $controller = 'home'; 

	protected $method = 'index';

	protected $params = [];	 

	public function __construct()
	{
		$url = $this->parseUrl();
	}

	protected function parseUrl()
	{
		if (isset($_GET['url'])) {
			$url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

			var_dump($url);
		}
	}
}