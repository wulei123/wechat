<?php

namespace WeChat;


class Http
{
<<<<<<< HEAD
    public static function get(){

    }
    public static function post(){

=======
    public static function get($url,$opt){
        return file_get_contents($url);
    }
    public static function post($url,$opt){
        return file_get_contents($url);
>>>>>>> d9e202d1d2035826d7c98ca115e7325f768f98ba
    }
}