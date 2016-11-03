<?php
namespace WeChat\Facades;
use Illuminate\Support\Facades\Facade;

class WeChat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wechat';
    }

}