<?php

namespace WeChat\Command;

/**
 * Class AccessCommand
 * @package WeChat\Command
 */
class AccessCommand
{
    /**
     * @param $arguments
     * @return mixed
     */
    public function execute($arguments)
    {
        $access = new \WeChat\Access();
        $output = $access->access($arguments);
        return $output;
    }
}