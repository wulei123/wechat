<?php
use WeChat\WeChat;
class WeChatTest extends PHPUnit_Framework_TestCase{
	
	public function testHello(){
		$hello = new WeChat();
		/**
     	* @expectedException InvalidArgumentException
     	*/
		$hello->access();
	}
}