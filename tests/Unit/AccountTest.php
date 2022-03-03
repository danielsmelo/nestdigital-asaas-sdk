<?php

namespace Nestdigital\Test\Unit;

use Nestdigital\Asaas\Facade\Asaas as FacadeAsaas;
use Nestdigital\Test\TestCase;

class AccountTest extends TestCase
{
    public function testTransferToBankAccount()
    {
        $values = [];

         $result = FacadeAsaas::account()->transfer($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindTransfer()
    {
         $result = FacadeAsaas::account()->findTransfer('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindTransferByDate()
    {
         $result = FacadeAsaas::account()->findTransferByDate('2021-05-02');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function findTransferByType($transferType)
    {
         $result = FacadeAsaas::account()->findTransferByType('ASAAS_ACCOUNT');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
