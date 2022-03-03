<?php

namespace Nestdigital\Test\Unit;

use Nestdigital\Asaas\Facade\Asaas as FacadeAsaas;
use Nestdigital\Test\TestCase;

class CustomerTest extends TestCase
{
    public function testCreateCustomer()
    {
        $values = [];

        $result = FacadeAsaas::customer()->create($values);

        $response = (array) json_decode($result->getBody(), true);

        $this->assertEquals($result->getStatusCode(), 200);
        // $this->assertEquals($response, $expected);
    }

    public function testFindCustomerById()
    {
        $result = FacadeAsaas::customer()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllCustomers()
    {
        $result = FacadeAsaas::customer()->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindCustomerByName()
    {
        $result = FacadeAsaas::customer()->findByName('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindCustomerByEmail()
    {
        $result = FacadeAsaas::customer()->findByEmail('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindCustomerByCpfCnpj()
    {
        $result = FacadeAsaas::customer()->findByCpfCnpj('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testUpdateCustomer()
    {
        $values = [
            'name'                 => 'Marcelo Almeida',
            'email'                => 'marcelo.almeida@gmail.com',
            'phone'                => '4738010919',
            'mobilePhone'          => '4799376637',
            'cpfCnpj'              => '24971563792',
            'postalCode'           => '01310-000',
            'address'              => 'Av. Paulista',
            'addressNumber'        => '150',
            'complement'           => 'Sala 201',
            'province'             => 'Centro',
            'externalReference'    => '12987382',
            'notificationDisabled' => false,
            'additionalEmails'     => 'marcelo.almeida2@gmail.com,marcelo.almeida3@gmail.com',
            'municipalInscription' => '46683695908',
            'stateInscription'     => '646681195275',
            'observations'         => 'ótimo pagador, nenhum problema até o momento',
        ];

        $result = FacadeAsaas::customer()->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testDeleteCustomer()
    {
        $result = FacadeAsaas::customer()->remove('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRestoreCustomer()
    {
        $result = FacadeAsaas::customer()->restore('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
