<?php

namespace Nestdigital\Test;

use Exception;
use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class PaymentDunningTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testCreatePaymentDunning()
    {
        $values = [];

        $result = $this->asaas
            ->paymentDunning()
            ->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSimulatePaymentDunning()
    {
        $values = [];

        $result = $this->asaas
            ->paymentDunning()
            ->simulate($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllPaymentDunning()
    {
        $this->expectException(Exception::class); //api fault

        $result = $this->asaas
            ->paymentDunning()
            ->find();
    }

    public function testFindPaymentDunning()
    {
        $result = $this->asaas
            ->paymentDunning()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentDunningByStatus()
    {
        $result = $this->asaas
            ->paymentDunning()
            ->findByStatus('PENDING');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentDunningByType()
    {
        $result = $this->asaas
            ->paymentDunning()
            ->findByType('type');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentDunningByPaymentId()
    {
        $result = $this->asaas
            ->paymentDunning()
            ->findByPaymentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentDunningEventHistory()
    {
        $result = $this->asaas
            ->paymentDunning()
            ->eventHistory('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentDunningReceivedPartialPayment()
    {
        $result = $this->asaas
            ->paymentDunning()
            ->receivedPartialPayment('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentsAvailableForDunning()
    {
        $result = $this->asaas
            ->paymentDunning()
            ->paymentsAvailableForDunning('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testResendPaymentDunningDocuments()
    {
        $values = [];

        $result = $this->asaas
            ->paymentDunning()
            ->resendDocuments('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testCancelPaymentDunning()
    {
        $result = $this->asaas
            ->paymentDunning()
            ->cancel('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
