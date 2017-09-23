<?php

	namespace Framework\Database;

	use \PDO;

	class Connection{

		private static $connection;

		public static function enable(){
			require_once (ROOT_FOLDER.'/config/Database.php');
			die(var_dump($database_info));
			try{
				self::$connection = new PDO('mysql:host='.$database_info['DB_HOST'].';dbname='.$database_info['DB_SCHEMA'].'', $database_info['DB_USERNAME'], $database_info['DB_PASSWORD'], array(PDO::ATTR_PERSISTENT => true));
				self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		    }
		}
	}