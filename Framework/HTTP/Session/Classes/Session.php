<?php
	
	namespace Framework\HTTP\Session\Classes;

	class Session{

		public static function enable(){
			session_start();
		}

	}