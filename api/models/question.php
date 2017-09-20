<?php

class Question extends Model{
	var $name = 'Question';
	
	function index($filter=null){
		$Q = $this->Question->select();
		if($filter){
			foreach($filter as $field=>$value){
				$where = "$field = :$field";
				$marks = [":$field"=>$value];
				$Q->where($where,$marks);
			}
		}
		$Q =  $Q->run();
		$response = array();
		foreach($Q as $question){
			$q  = array();
			$q['id']=$question->id;
			$q['content']=$question->content;
			$options = array();
			foreach($question->option as $o){
				$options[$o->weight] =  $o->content;
			}
			$q['option']=$options;
			array_push($response,array('question'=>$q));
		}
		return $response;
	}
}