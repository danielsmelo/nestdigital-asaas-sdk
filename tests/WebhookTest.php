<?php

namespace Nestdigital\Test;

use Exception;
use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class WebhookTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testConfigWebhook()
    {
        $values = [];

        $this->expectException(Exception::class); //api fault

        $result = $this->asaas
            ->webhook()
            ->config($values);
    }

    public function testFindConfig()
    {
        $this->expectException(Exception::class);

        $result = $this->asaas
            ->webhook()
            ->findConfig();
    }

    public function testWebhookInvoiceConfig()
    {
        $values = [];

        $result = $this->asaas
            ->webhook()
            ->invoiceConfig($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindWebhookInvoiceConfig()
    {
        $result = $this->asaas
            ->webhook()
            ->findInvoiceConfig();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testWebhookTransferConfig()
    {
        $values = [];

        $result = $this->asaas
            ->webhook()
            ->transferConfig($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindWebhookTransferConfig()
    {
        $result = $this->asaas
            ->webhook()
            ->findTransferConfig();

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
