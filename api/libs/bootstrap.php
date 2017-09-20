<?php 
define('DS',DIRECTORY_SEPARATOR);
define('APP',dirname(dirname(dirname(__FILE__))));

if(!defined('IS_LOCAL')) 
	define('IS_LOCAL',$_SERVER['HTTP_HOST']=='localhost');
	
if(IS_LOCAL)
	;
	$_ENV = json_decode(file_get_contents(APP.DS.'env.json'),true);