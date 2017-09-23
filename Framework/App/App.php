<?php

	namespace Framework\App;

	use Framework\HTTP\Request\Classes\Request;
	use Framework\HTTP\Routes\Classes\Route;
	use Framework\Booting\Classes\Booter;

	class App
	{
		public $params;

		public function handle(Request $req){
			$req::build();
			$this->params = Route::getRoute($req);
		}

		public function boot(){
			Booter::session();
			foreach($this->params['booters'] as $booter)
				Booter::call($booter);
			Booter::database();
		}
	}
