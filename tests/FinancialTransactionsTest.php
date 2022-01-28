<?php

namespace Nestdigital\Test;

use Exception;
use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class FinancialTransactionsTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testFindFinancialTransactions()
    {
        $this->expectException(Exception::class); //api fault

        $result = $this->asaas
            ->financialTransactions()
            ->find();
    }
}
