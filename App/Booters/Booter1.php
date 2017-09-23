<?php

    namespace App\Booters;

    use Framework\View\Classes\View;

    class Booter1 {

        public function execute(){

            $data = array();

            $data['id'] = 5;

            View::share($data);

        }
    }