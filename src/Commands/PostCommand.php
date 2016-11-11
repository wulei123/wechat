<?php
/**
 * Created by PhpStorm.
 * User: 武雷
 * Date: 2016/11/11
 * Time: 22:47
 */

namespace WeChat\Command;


use WeChat\Http;

class PostCommand
{
    public function execute($argument){
        return Http::post();
    }
}