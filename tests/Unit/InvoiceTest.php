<?php

namespace Nestdigital\Test\Unit;

use Nestdigital\Asaas\Facade\Asaas;
use Nestdigital\Test\TestCase;

class InvoiceTest extends TestCase
{
    public function testCreateInvoice()
    {
        $values = [];

        $result = Asaas::invoice()->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testUpdateInvoice()
    {
        $values = [];

        $result = Asaas::invoice()->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllInvoices()
    {
        $result = Asaas::invoice()->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindInvoice()
    {
        $result = Asaas::invoice()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindInvoiceByPaymentId()
    {
        $result = Asaas::invoice()->findByPaymentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindInvoiceByInstallmentId()
    {
        $result = Asaas::invoice()->findByInstallmentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindInvoiceByStatus()
    {
        $result = Asaas::invoice()->findByStatus('PENDING');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testAuthorizeInvoice()
    {
        $result = Asaas::invoice()->authorize('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testCancelInvoice()
    {
        $result = Asaas::invoice()->cancel('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testInvoiceMunicipalServices()
    {
        $result = Asaas::invoice()->municipalServices('description');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
