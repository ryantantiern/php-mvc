<?php

class Controller 
{
	protected function model($model, $data = [])
	{
		require_once '../app/models/' . $model . '.php';
		return new $model($data);
	}

	protected function view($view, $data = [])
	{
		require_once '../app/views/'. $view .'.php';
	}

}