<?php

class Segment extends Model{
	var $name = 'Segment';
	
	function index(){
		$S = $this->Segment->select()->run();
		$response = array();
		foreach($S as $segment){
			$s  = $segment;
			
			array_push($response,array('segment'=>$s));
		}
		return $response;
	}
}