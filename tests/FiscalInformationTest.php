<?php

namespace Nestdigital\Test;

use Exception;
use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class FiscalInformationTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testFiscalInformationMunicipalServices()
    {
        $result = $this->asaas
            ->fiscalInformation()
            ->municipalServices();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testCreateFiscalInformation()
    {
        $values = [];

        $this->expectException(Exception::class);

        $result = $this->asaas
            ->fiscalInformation()
            ->create($values);
    }

    public function testUpdateFiscalInformation()
    {
        $values = [];

        $this->expectException(Exception::class);

        $result = $this->asaas
            ->fiscalInformation()
            ->update($values);
    }

    public function testFindFiscalInformation()
    {
        $this->expectException(Exception::class);

        $result = $this->asaas
            ->fiscalInformation()
            ->find();
    }
}
