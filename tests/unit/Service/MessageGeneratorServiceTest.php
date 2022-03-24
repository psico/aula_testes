<?php

use PHPUnit\Framework\TestCase;

class MessageGeneratorServiceTest extends TestCase
{
    public function testGetHappyMessage() {
        $service = new MessageGenerator();
        $result = $service->getHappyMessage();

        $this->assertStringContainsString('seen', $result);
    }
}