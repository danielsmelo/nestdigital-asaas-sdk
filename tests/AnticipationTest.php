<?php

namespace Nestdigital\Test;

use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class AnticipationTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testeCreateAnticipation()
    {
        $values = [];

        $result = $this->asaas
            ->anticipation()
            ->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testeSimulateAnticipation()
    {
        $values = [];

        $result = $this->asaas
            ->anticipation()
            ->simulate($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAnticipationById()
    {
        $result = $this->asaas
            ->anticipation()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAnticipationByPaymentId()
    {
        $result = $this->asaas
            ->anticipation()
            ->findByPaymentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAnticipationByInstallmentId()
    {
        $result = $this->asaas
            ->anticipation()
            ->findByInstallmentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAnticipationByStatus()
    {
        $result = $this->asaas
            ->anticipation()
            ->findByStatus('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
