<?php
	use Framework\HTTP\Routes\Classes\Route;

	Route::get(array('route' => '/admin', 'name' => 'Privilegiu', 'controller' => 'AdminController','booters' => array('Booter1')));