<?php

namespace Nestdigital\Test\Unit;

use Exception;
use Nestdigital\Asaas\Facade\Asaas;
use Nestdigital\Test\TestCase;

class PaymentDunningTest extends TestCase
{
    public function testCreatePaymentDunning()
    {
        $values = [];

        $result = Asaas::paymentDunning()->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testSimulatePaymentDunning()
    {
        $values = [];

        $result = Asaas::paymentDunning()->simulate($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllPaymentDunning()
    {
        $this->expectException(Exception::class); //api fault

        $result = Asaas::paymentDunning()->find();
    }

    public function testFindPaymentDunning()
    {
        $result = Asaas::paymentDunning()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentDunningByStatus()
    {
        $result = Asaas::paymentDunning()->findByStatus('PENDING');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentDunningByType()
    {
        $result = Asaas::paymentDunning()->findByType('type');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindPaymentDunningByPaymentId()
    {
        $result = Asaas::paymentDunning()->findByPaymentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentDunningEventHistory()
    {
        $result = Asaas::paymentDunning()->eventHistory('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentDunningReceivedPartialPayment()
    {
        $result = Asaas::paymentDunning()->receivedPartialPayment('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testPaymentsAvailableForDunning()
    {
        $result = Asaas::paymentDunning()->paymentsAvailableForDunning('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testResendPaymentDunningDocuments()
    {
        $values = [];

        $result = Asaas::paymentDunning()->resendDocuments('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testCancelPaymentDunning()
    {
        $result = Asaas::paymentDunning()->cancel('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
