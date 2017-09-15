<?php
echo '<pre>';
$scheme = $_SERVER['REQUEST_SCHEME'];
$host = $_SERVER['HTTP_HOST'];

$url=$scheme.'://'.$host;
if(preg_match('/localhost/', $host))
	$url.=dirname(dirname($_SERVER['PHP_SELF']));
$url.='/almost-done';
header('Location: '.$url);