<?php

namespace WeChat;


class Http
{
    public static function get($url,$opt){
        return file_get_contents($url);
    }
    public static function post($url,$opt){
        return file_get_contents($url);
    }
}