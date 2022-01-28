<?php

namespace Nestdigital\Test;

use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    // public function testCheckAccountBalance()
    // {
    //     $result = $this->asaas
    //         ->account()
    //         ->balance();

    //     $this->assertEquals($result->getStatusCode(), 200);
    // }

    public function testTransferToBankAccount()
    {
        $values = [];

        $result = $this->asaas
            ->account()
            ->transfer($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindTransfer()
    {
        $result = $this->asaas
            ->account()
            ->findTransfer('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindTransferByDate()
    {
        $result = $this->asaas
            ->account()
            ->findTransferByDate('2021-05-02');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function findTransferByType($transferType)
    {
        $result = $this->asaas
            ->account()
            ->findTransferByType('ASAAS_ACCOUNT');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
