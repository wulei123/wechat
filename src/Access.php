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
        $token = env('WECHAT_TOKEN');//替换为在公众平台填写的token
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);//将数组中的字符串按字典序排序
        $tmpStr = implode( $tmpArr );//将所有字符串拼接起来
        $tmpStr = sha1( $tmpStr );//用sha1加密
        if( $tmpStr == $signature ){
            echo $echostr;//必须echo传来的echostr参数作为响应
        }else{
            echo false;
        }
    }
}