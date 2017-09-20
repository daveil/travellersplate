<?php

class Model{
	var $name = 'Model';
	protected  $api;
	public function __construct($api){
		
		$name = $this->name;
		$this->useTable = strtolower($name);
		$this->$name =$api->{$this->useTable};
		
	}
}