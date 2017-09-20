<?php

class Criteria extends Model{
	var $name = 'Criteria';
	
	function index(){
		$C = $this->Criteria->select()->run();
		$response = array();
		foreach($C as $criteria){
			$c  = $criteria;
			array_push($response,array('criteria'=>$c));
		}
		return $response;
	}
	
}