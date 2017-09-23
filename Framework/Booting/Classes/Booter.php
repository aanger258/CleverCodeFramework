<?php

	namespace Framework\Booting\Classes;

	use Framework\HTTP\Session\Classes\Session;
	use Framework\Database\Connection;

	class Booter{

		public static function session(){
			Session::enable();
		}
		
		public static function call($booter){
			$booter = BOOTERS_NAMESPACE.$booter;
			$booter = new $booter;
			$booter->execute();
		}

		public static function database(){
			Connection::enable();
		}

	}