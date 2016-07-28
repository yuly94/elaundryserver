<?php

class Bootstrap {
	function __construct() {
		$url = isset($_GET['url']) ? $_GET['url']:null;
		$url = rtrim($url,'/');
		$url = explode('/', $url);
		
		print_r($url);
		
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}
		
		$file = 'controllers/'.$url[0].'.php';
		if (file_exists($file)){
			require $file;
		} else {
			//throw new Exception("the file $file does not ofound");
			require 'controllers/error.php';
			$controller = new Error();
			return false;
		}
			
		//require 'controllers/'.$url[0].'.php';
		$controller = new $url[0];
		
		//calling methods
		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} else {
				echo "er0r0r";
			}
			
		}
		else {
			if (isset($url[1])) {
				$controller->{$url[1]}();
			}
		} 
		$controller->index();
	}
}