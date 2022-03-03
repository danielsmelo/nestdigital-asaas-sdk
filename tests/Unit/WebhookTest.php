<?php

namespace Nestdigital\Test\Unit;

use Exception;
use Nestdigital\Asaas\Facade\Asaas;
use Nestdigital\Test\TestCase;

class WebhookTest extends TestCase
{
    public function testConfigWebhook()
    {
        $values = [];

        $this->expectException(Exception::class); //api fault

        $result = Asaas::webhook()->config($values);
    }

    public function testFindConfig()
    {
        $this->expectException(Exception::class);

        $result = Asaas::webhook()->findConfig();
    }

    public function testWebhookInvoiceConfig()
    {
        $values = [];

        $result = Asaas::webhook()->invoiceConfig($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindWebhookInvoiceConfig()
    {
        $result = Asaas::webhook()->findInvoiceConfig();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testWebhookTransferConfig()
    {
        $values = [];

        $result = Asaas::webhook()->transferConfig($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindWebhookTransferConfig()
    {
        $result = Asaas::webhook()->findTransferConfig();

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
