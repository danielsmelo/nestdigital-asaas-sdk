<?php

namespace Nestdigital\Test;

use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class InstallmentTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testFindInstallmentById()
    {
        $result = $this->asaas
            ->installment()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllInstallments()
    {
        $result = $this->asaas
            ->installment()
            ->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRemoveInstallment()
    {
        $result = $this->asaas
            ->installment()
            ->remove('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testReverseInstallment()
    {
        $result = $this->asaas
            ->installment()
            ->reversePayment('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
