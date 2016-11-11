<?php

namespace WeChat;
use Illuminate\Support\Facades\Input;

class Access
{
    public function access(){
        $signature = Input::get("signature");
        $timestamp = Input::get("timestamp");
        $nonce = Input::get("nonce");
        $echostr = Input::get("echostr");
        $token = env('WECHAT_TOKEN');
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        if( $tmpStr == $signature ){
            echo $echostr;
        }else{
            echo false;
        }
    }
}