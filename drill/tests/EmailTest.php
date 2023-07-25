<?php

use PHPUnit\Framework\TestCase;
use Italomoralesf\Drill\Email;

class EmailTest extends TestCase
{
    public function testSend()
    {
        $emailMock = $this->getMockBuilder(Email::class)->getMock();

        $emailMock->method('send')->willReturn(true);

        $this->assertTrue($emailMock->send());
    }
}
