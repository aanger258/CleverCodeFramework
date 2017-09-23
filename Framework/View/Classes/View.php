<?php

    namespace Framework\View\Classes;
    
    class View {

        protected static $shares;

        public static function make($path,$data){

            foreach(self::$shares as $key=>$item)
                $data[$key] = $item;

            include_once(VIEW_PATH.$path);

        }
        
        public static function share($shared_data){

            foreach($shared_data as $key=>$value){
                self::$shares[$key] = $value;
            }

        }
        
    }