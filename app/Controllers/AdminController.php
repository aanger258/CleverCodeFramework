<?php

	namespace App\Controllers;

	use Framework\HTTP\Request\Classes\Request;
	use Framework\HTTP\View\Classes\BaseController;

	class AdminController extends BaseController{

		public function index(){
			$id = Request::getParamsExcept(array('id'));
			BaseController::view("menu.html", $id);
		}



	}