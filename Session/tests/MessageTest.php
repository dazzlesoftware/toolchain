<?php

use PHPUnit\Framework\TestCase;
use DazzleSoftware\Toolchain\Session\Message;

class SessionMessageTest extends TestCase
{

    public function testCreation()
    {
        $message = new Message;
        $this->assertTrue(true);
    }
}
