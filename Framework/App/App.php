<?php

	namespace Framework\App;

	use Framework\HTTP\Request\Classes\Request;
	use Framework\HTTP\Routes\Classes\Route;

	class App
	{

		public function handle(Request $req)
		{
			$req::build();
			Route::getRoute($req);
		}
	}
