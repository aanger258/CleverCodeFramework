<?php
	namespace Framework\HTTP\View\Classes;

	class BaseController 
	{
		
		public static function view($file, $data = array())
		{
			include VIEW_PATH . $file;
			foreach ($data as $key => $value) {
				echo $key . ' ';
			}
		}

	}