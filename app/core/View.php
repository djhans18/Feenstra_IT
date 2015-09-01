<?php

class View{
	public $title;
	public $defaultCss = array('bootstrap.min', 'common', 'jssor_slider');
	public $customCss = array();
	public $defaultScript = array('jquery.min', 'bootstrap.min', 'general', 'jssor.slider.mini');
	public $customScript = array();
	public $viewPath = array();

	public function __construct($title, $customcss = array(), $customscript = array(), $viewpath = array(), $data = array()){
		$this->title = $title;
		$this->customCss = $customcss;
		$this->customScript = $customscript;
		$this->viewPath = $viewpath;
		$this->data = $data;
	}

	public function render(){
		echo "<!DOCTYPE HTML>\n";
    	echo "<html>";
    	echo "<head>";
    	echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
		echo "<base href='http://localhost/Portfolio/public/'>";
    	echo "<title>Feenstra IT - " . $this->title . "</title>";

    	foreach ($this->defaultCss as $css) {
    		echo "<link rel='stylesheet' type='text/css' href=css/" . $css . ".css>";
    	}

    	echo "</head>";

    	echo "<body>";
    	echo "<div class='container'>";

    	foreach ($this->viewPath as $viewPath) {
    		include "../app/views/" . $viewPath . "/index.php";
    	}

    	echo "</div>";

    	foreach ($this->defaultScript as $script) {
    		echo "<script src='js/" . $script . ".js'></script>";
    	}

    	foreach ($this->customScript as $script) {
    		echo "<script src='js/" . $script . ".js'></script>";
    	}

    	echo "</body>";



    	echo "</html>";
	}
}
