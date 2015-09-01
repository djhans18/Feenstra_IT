<?php

function __autoload($model) {
    	require_once '../app/models/' . $model . '.php';
}

class App{

	protected $controller = 'HomeController';
	protected $method = 'init';
	protected $params = [];

	public function __construct(){
		$url = $this->parseURL();

		if(file_exists('../app/controllers/' . $url[0] . 'Controller.php')){
			$this->controller = $url[0] . 'Controller';
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php';

		$this->controller = new $this->controller;

		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	protected function parseUrl(){
		if(isset($_GET['url'])){
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}