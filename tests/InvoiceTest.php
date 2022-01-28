<?php

namespace Nestdigital\Test;

use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class InvoiceTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testCreateInvoice()
    {
        $values = [];

        $result = $this->asaas
            ->invoice()
            ->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testUpdateInvoice()
    {
        $values = [];

        $result = $this->asaas
            ->invoice()
            ->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllInvoices()
    {
        $result = $this->asaas
            ->invoice()
            ->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindInvoice()
    {
        $result = $this->asaas
            ->invoice()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindInvoiceByPaymentId()
    {
        $result = $this->asaas
            ->invoice()
            ->findByPaymentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindInvoiceByInstallmentId()
    {
        $result = $this->asaas
            ->invoice()
            ->findByInstallmentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindInvoiceByStatus()
    {
        $result = $this->asaas
            ->invoice()
            ->findByStatus('PENDING');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testAuthorizeInvoice()
    {
        $result = $this->asaas
            ->invoice()
            ->authorize('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testCancelInvoice()
    {
        $result = $this->asaas
            ->invoice()
            ->cancel('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testInvoiceMunicipalServices()
    {
        $result = $this->asaas
            ->invoice()
            ->municipalServices('description');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
