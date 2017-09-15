<?php 
	namespace Framework\HTTP\Routes\Classes;

	use Framework\HTTP\Request\Classes\Request;

	class Route{
		public static $routes=array();

		public static function get($group = array())
		{	
			$group = self::setDefaults($group);
			$group['type'] = 'get';
			self::setRoute($group);
		}

		public static function post($group = array())
		{
			$group = self::setDefaults($group);
			$group['type'] = 'post';
			self::setRoute($group);
		}

		public static function head($group = array())
		{
			$group = self::setDefaults($group);
			$group['type'] = 'head';
			self::setRoute($group);
		}

		public static function delete($group = array())
		{
			$group = self::setDefaults($group);
			$group['type'] = 'delete';
			self::setRoute($group);
		}

		public static function update($group = array())
		{
			$group = self::setDefaults($group);
			$group['type'] = 'update';
			self::setRoute($group);
		}

		private static function setRoute($group){
			$group['route'] = ltrim($group['route'],'/');
			if(empty($group['route']))
				$group['route'] = '/';
			self::$routes[$group['type']][$group['route']]=array('controller'=>$group['namespace'].$group['controller'], 'function'=>$group['function'],'name' => $group['name'] , 'middle' => $group['middle']);
		}

		private static function setDefaults($group){
			if(!isset($group['route']))
				$group['route'] = '/';
			if(!isset($group['name']))
				$group['name'] = 'unnamed';
			if(!isset($group['controller']))
				$group['controller'] = 'HomeController';
			if(!isset($group['function']))
				$group['function'] = 'index';
			if(!isset($group['middle']))
				$group['middle'] = array();
			if(!isset($group['namespace']))
				$group['namespace'] = 'App\\Controllers\\';
			return $group;
		}

		public static function getRoute(Request $req){
			if (!isset(self::$routes[$req::$request_type][$req::$path])){
				die('Route not found');
			}
			return self::$routes[$req::$request_type][$req::$path];
		}

		public static function getAllRoutes(){
			return self::$routes;
		}


	}
