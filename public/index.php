<?php

	require_once(realpath(__DIR__.'/../config/Settings.php'));

	require_once(realpath(__DIR__.'/../Framework/Autoloading/Autoloader.php'));
	
	require_once(realpath(__DIR__.'/../routes.php'));

	use Framework\App\App;
	use Framework\HTTP\Request\Classes\Request;

	$app = new App();

	$app->handle(Request::instance());

