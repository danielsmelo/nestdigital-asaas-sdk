<?php

namespace Nestdigital\Test;

use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class NotificationTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    // public function testFindNotificationsOfCustomer()
    // {
    //     $result = $this->asaas
    //         ->notification()
    //         ->find('1');

    //     $this->assertEquals($result->getStatusCode(), 200);
    // }

    public function testUpdateNotification()
    {
        $values = [];

        $result = $this->asaas
            ->notification()
            ->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
