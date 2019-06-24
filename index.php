<?php
	$token = $_GET['token'];
	unset($_GET['token']);

	if(!empty($token)){
		include_once('tokens.php');

		if(isset($list[$token])){
			header("Location: ".$list[$token]."?".http_build_query($_GET));
			exit();
		}
	}

  

	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
	echo '<h1>404</h1><h3>Not Found.</h3>';
