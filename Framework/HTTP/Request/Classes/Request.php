<?php 
	namespace Framework\HTTP\Request\Classes;

	use Framework\HTTP\Request\Interfaces\Request as RequestInterface;

	Class Request implements RequestInterface
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

		public static function getParam($key=array()){
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
			self::$path = trim($_SERVER['REQUEST_URI'],'/');
		}

		public static function getRequestType()
		{
			self::$request_type = strtolower($_SERVER['REQUEST_METHOD']);
		}


		
	}