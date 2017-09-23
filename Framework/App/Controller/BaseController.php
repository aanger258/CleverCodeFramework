<?php

	namespace Framework\App\Controller;

	use Framework\View\Classes\View;

	class BaseController 
	{
		protected $view_data = array();

		public $view;

		public function setOutput($path){
			View::make($path,$this->view_data);
		}
		
//		public static function view($file, $data = array())
//		{
//			include VIEW_PATH . $file;
//			foreach ($data as $key => $value) {
//				echo $key . ' ';
//			}
//		}

	}