<?php

namespace Nestdigital\Test;

use Exception;
use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class BillPaymentTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testCreateBillPayment()
    {
        $values = [];

        $result = $this->asaas
            ->billPayment()
            ->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSimulateBillPayment()
    {
        $values = [];

        $result = $this->asaas
            ->billPayment()
            ->simulate($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllBillPayments()
    {
        $this->expectException(Exception::class); //api fault

        $result = $this->asaas
            ->billPayment()
            ->find();
    }

    public function testFindBillPaymentById()
    {
        $result = $this->asaas
            ->billPayment()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testCancelBillPayment()
    {
        $result = $this->asaas
            ->billPayment()
            ->cancel('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
