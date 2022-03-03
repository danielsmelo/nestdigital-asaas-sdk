<?php

namespace Nestdigital\Test\Unit;

use Exception;
use Nestdigital\Asaas\Facade\Asaas as FacadeAsaas;
use Nestdigital\Test\TestCase;

class BillPaymentTest extends TestCase
{
    public function testCreateBillPayment()
    {
        $values = [];

        $result = FacadeAsaas::billPayment()->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSimulateBillPayment()
    {
        $values = [];

        $result = FacadeAsaas::billPayment()->simulate($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllBillPayments()
    {
        $this->expectException(Exception::class); //api fault

        $result = FacadeAsaas::billPayment()->find();
    }

    public function testFindBillPaymentById()
    {
        $result = FacadeAsaas::billPayment()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testCancelBillPayment()
    {
        $result = FacadeAsaas::billPayment()->cancel('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
