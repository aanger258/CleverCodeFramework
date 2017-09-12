<?php 
	namespace Framework\HTTP\Routes\Classes;

	use Framework\HTTP\Routes\Interfaces\Route as RouteInterface;
	use Framework\HTTP\Request\Classes\Request;

	Class Route implements RouteInterface
	{
		public static $routes=array();

		public static function get($route, $controller, $function='index')
		{
			self::setRoute('get',$route, $controller, $function);
		}

		public static function post($route, $controller, $function='index')
		{
			self::setRoute('post',$route, $controller, $function);
		}

		public static function head($route, $controller, $function='index')
		{
			self::setRoute('head',$route, $controller, $function);
		}

		public static function delete($route, $controller, $function='index')
		{
			self::setRoute('delete',$route, $controller, $function);
		}

		public static function update($route, $controller, $function='index')
		{
			self::setRoute('update',$route, $controller, $function);
		}

		private static function setRoute($type,$route,$controller,$function='index'){
			$route = ltrim($_SERVER['REQUEST_URI'],'/');
			self::$routes[$type][$route]=array('controller'=>$controller, 'function'=>$function);
		}

		public static function getRoute(Request $req)
		{
			return self::$routes[$req::$request_type][$req::$path];
		}

		public static function getAllRoutes(){
			return self::$routes;
		}

	}
