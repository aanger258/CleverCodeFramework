<?php

	namespace App\Controllers;

	use Framework\HTTP\Request\Classes\Request;

	class AdminController{

		public function index(){
			$id = Request::getParamsExcept(array('id'));
		}

	}