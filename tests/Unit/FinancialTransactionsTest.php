<?php

namespace Nestdigital\Test\Unit;

use Exception;
use Nestdigital\Asaas\Facade\Asaas;
use Nestdigital\Test\TestCase;

class FinancialTransactionsTest extends TestCase
{
    public function testFindFinancialTransactions()
    {
        $this->expectException(Exception::class); //api fault

        $result = Asaas::financialTransactions()->find();
    }
}
