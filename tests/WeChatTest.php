<?php

use PHPUnit\Framework\TestCase;
use WeChat\WeChat;
class WeChatTest extends TestCase{
	public function testHello(){
		$hello = new WeChat();
		$this->assertEquals('hello',$hello->hello());
	}
}