<?php

class HomeController extends Controller{
	public function init(){

		$cases = Cases::getAllCases();
		echo $cases;

		$view = new View('Home', array(), array(), array('header', 'home'), array());
		$view->render();
	}
}