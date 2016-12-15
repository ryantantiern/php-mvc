<?php 

class HomeController extends Controller
{
	public function index ($name = '')
	{	
		echo 'home index page';
	}

	public function initModel($model = '', $data = '')
	{	
		// Abstract Factory! this is what we need! 
		$model_str = $model;
		if (!empty($model_str)){
			if (file_exists('../app/models/' . ucfirst($model_str) . '.php'))
			{
				$model = $this->model($model, $data);
				echo '<br>';
			}
		}

		var_dump($model);
	}
}