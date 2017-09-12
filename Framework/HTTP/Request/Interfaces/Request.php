<?php 
	namespace Framework\HTTP\Request\Interfaces;

	interface Request
	{
		public static function instance();
		public static function getParam($key=array());
		public static function getClient($key=array());
		public static function getSession($key=array());
		public static function getCookies($key=array());
		public static function build();
		public static function getCurrentRoute();
	}