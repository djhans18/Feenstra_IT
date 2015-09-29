<?php

class HomeController extends Controller{
	public function init(){

		$cases = Cases::all();
		$aboutme = AboutMe::all();

		$view = new View('Home', [], [], array('header', 'home'), [$cases, $aboutme]);
		$view->render();
	}
}