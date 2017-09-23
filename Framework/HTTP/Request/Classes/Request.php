<?php 
	namespace Framework\HTTP\Request\Classes;

	class Request
	{
		protected static $_instance;

		public static $path;

		public static $request_type;

		public static function instance(){
			if (self::$_instance === null){
            	self::$_instance = new self;
        	}

        	return self::$_instance;
		}

		public static function getParams($key=array()){
			$data = array();
			if(empty($key)){
				foreach($_REQUEST AS $key=>$item)
					$data[$key] = $item;
			}
			else{
				foreach($key as $item){
					$data[$item] = $_REQUEST[$item];
				}
			}
			return $data;
		}

		public static function getParamsExcept($key = array()){
			if(empty($key))
				return $_REQUEST;
			$data = $_REQUEST;
			foreach ($key as $item) {
				unset($data[$item]);
			}
			return $data;
		}

		public static function getClient($key=array()){

		}

		public static function getSession($key=array()){

		}

		public static function getCookies($key=array()){

		}

		public static function build(){
			self::getCurrentRoute();
			self::getRequestType();
		}

		public static function getCurrentRoute(){
			self::$path = explode('?',trim($_SERVER['REQUEST_URI'],'/'));
			self::$path = self::$path[0];
			if(empty(self::$path))
				self::$path = '/';
		}

		public static function getRequestType(){
			self::$request_type = strtolower($_SERVER['REQUEST_METHOD']);
		}


		
	}