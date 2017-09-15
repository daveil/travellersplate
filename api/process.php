<?php
echo '<pre>';
$scheme = $_SERVER['REQUEST_SCHEME'];
$host = $_SERVER['SERVER_NAME'];
$port = $_SERVER['SERVER_PORT'];

$url=$scheme.'://';
$url.=$host;
if($port!=80){
	$url.=':'.$port;
}
if(preg_match('/localhost/', $host))
	$url.=dirname(dirname($_SERVER['PHP_SELF']));
$url.='/almost-done';
echo $url.'<br>';

print_r($_SERVER);
//header('Location: /almost-done');