<?php
use SimpleCrud\SimpleCrud;
class TPDBConfig{
	 public static function init($conf){
		$db_host =  $conf['DB_HOST'];
		$db_name =  $conf['DB_DBSE'];
		$username =  $conf['DB_USER'];
		$password =  $conf['DB_PASS'];
		$dsn = "mysql:host=$db_host;dbname=$db_name";
		$pdo = new PDO($dsn, $username, $password);	
		$db =  new SimpleCrud($pdo);
		return $db;
	}
}
$API =  TPDBConfig::init($_ENV);