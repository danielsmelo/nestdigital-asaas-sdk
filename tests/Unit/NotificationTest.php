<?php

namespace Nestdigital\Test\Unit;

use Nestdigital\Asaas\Facade\Asaas;
use Nestdigital\Test\TestCase;

class NotificationTest extends TestCase
{
     public function testUpdateNotification()
    {
        $values = [];

        $result = Asaas::notification()->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
