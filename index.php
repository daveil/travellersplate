<?php
	include('views/elements/header.php');
	if(!isset($_GET['url']))
		$page = 'home';
	else
		$page = $_GET['url'];
	
	include('views/pages/'.$page.'.php');
	include('views/elements/footer.php');