<?php
namespace WeChat;
/**
 * Class WeChat
 * @package WeChat
 */
class WeChat
{


    /**
     * @param $name
     * @param $arguments
     * @return WeChat
     */
    public function __call($name , $arguments){
        return $this->getCommandClassName( $name, $arguments);
    }

    /**
     * @param $name
     * @param $arguments
     * @return WeChat
     */
    public function getCommandClassName( $name, $arguments){
        $commandname = sprintf("\\WeChat\\Command\\%sCommand",ucfirst($name));
        $command = $this->getClass($commandname,$name,$arguments);
        $output = $command->execute($arguments);
        return $output ? $output : $this;

    }

    /**
     * @param $commandname
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function getClass($commandname,$name,$arguments){
        if(class_exists($commandname)){
            return new $commandname($arguments);
        }else{
            throw new \WeChat\Exception\MethodNotFoundException("method {$name} is not found");
        }
    }
}