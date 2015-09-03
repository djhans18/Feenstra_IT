<?php

class HomeController extends Controller{
	public function init(){

		$cases = Cases::all();
		print_r($cases);

		echo $cases[1]->id;
		//die;

		$data = [];

		$view = new View('Home', array(), array(), array('header', 'home'), $cases);
		$view->render();
	}
}