<?php 
global $Router;
class TPRouter{
	
	function __construct($conf){		
		if(isset($conf['url'])){
			$this->model = str_replace('.json','',$conf['url']);
			$this->filter=array();
		}
		foreach($conf as $key=>$value){
			if($key!='url')
				$this->filter[$key]=$value;
		}
	}
}

$Router =  new TPRouter($_GET);

if($Router->model)
	require('dispatcher.php');
