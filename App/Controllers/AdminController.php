<?php

	namespace App\Controllers;

	use Framework\HTTP\Request\Classes\Request;
	use Framework\App\Controller\BaseController;

	class AdminController extends BaseController{

		public function index(){
			$this->view_data = Request::getParams(array('id'));

			$this->setOutput('menu.html');

//			BaseController::view("menu.html", $id);
		}



	}