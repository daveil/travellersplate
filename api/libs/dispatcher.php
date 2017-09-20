<?php

class TPDispatcher{
	var $data;
	public function __construct($route,$api){
		$model = $route->model;
		require(APP.DS."api".DS."libs".DS.'Model.php');
		require(APP.DS."api".DS."models".DS.$model.'.php');
		$m = new $model($api,$route->filter);
		switch($_SERVER['REQUEST_METHOD']){
			case 'GET':
				$this->data = $m->index($route->filter);
			break;
		}
	}
	public function respond(){
		header('Content-type:application/json');
		echo json_encode($this->data);
	}
}

$Dispatcher = new TPDispatcher($Router,$API);
$Dispatcher->respond();
