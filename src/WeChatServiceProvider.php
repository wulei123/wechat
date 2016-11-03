<?php

namespace WeChat;
use Illuminate\Support\ServiceProvider;

class WeChatServiceProvider extends ServiceProvider
{
    public function boot(){

    }

    public function register(){
        $this->app->singleton('wechat',function(){
            return new WeChat;
        });
    }
}