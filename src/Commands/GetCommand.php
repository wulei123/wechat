<?php

namespace WeChat\Command;


use WeChat\Http;

class GetCommand
{
    public function execute($argument){
        $url = $argument[0];
        $opt = $argument[1];
        return Http::get($argument);
    }

}