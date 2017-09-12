<?php 
	namespace Framework\HTTP\Routes\Interfaces;

	use Framework\HTTP\Request\Classes\Request;

	interface Route
	{
		public static function get($route, $controller, $function='index');
		public static function post($route, $controller, $function='index');
		public static function head($route, $controller, $function='index');
		public static function delete($route, $controller, $function='index');
		public static function update($route, $controller, $function='index');
		public static function getAllRoutes();
		public static function getRoute(Request $req);
	}