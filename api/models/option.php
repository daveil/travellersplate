<?php

class Option extends Model{
	var $name = 'Option';
	
	function index($filter=null){
		$O = $this->Option->select();
		if($filter){
			foreach($filter as $field=>$value){
				$where = "$field = :$field";
				$marks = [":$field"=>$value];
				$O->where($where,$marks);
			}
		}
		$O =  $O->run();
		$response = array();
		foreach($O as $option){
			$o  = array();
			$o['id']=$option->id;
			$o['content']=$option->content;
			
			array_push($response,array('option'=>$o));
		}
		return $response;
	}
}