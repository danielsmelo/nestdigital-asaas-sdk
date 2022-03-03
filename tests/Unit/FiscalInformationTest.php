<?php

namespace Nestdigital\Test\Unit;

use Exception;
use Nestdigital\Asaas\Facade\Asaas;
use Nestdigital\Test\TestCase;

class FiscalInformationTest extends TestCase
{
    public function testFiscalInformationMunicipalServices()
    {
        $result = Asaas::fiscalInformation()->municipalServices();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testCreateFiscalInformation()
    {
        $values = [];

        $this->expectException(Exception::class);

        $result = Asaas::fiscalInformation()->create($values);
    }

    public function testUpdateFiscalInformation()
    {
        $values = [];

        $this->expectException(Exception::class);

        $result = Asaas::fiscalInformation()->update($values);
    }

    public function testFindFiscalInformation()
    {
        $this->expectException(Exception::class);

        $result = Asaas::fiscalInformation()->find();
    }
}
