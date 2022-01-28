<?php

namespace Nestdigital\Test;

use Nestdigital\Asaas\Asaas;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    private $asaas;

    public function setUp(): void
    {
        $this->asaas = new Asaas();
    }

    public function testCreateCustomer()
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

        // $expected = [];

        $result = $this->asaas
            ->customer()
            ->create($values);

        $response = (array) json_decode($result->getBody(), true);

        $this->assertEquals($result->getStatusCode(), 200);
        // $this->assertEquals($response, $expected);
    }

    public function testFindCustomerById()
    {
        $result = $this->asaas
            ->customer()
            ->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAllCustomers()
    {
        $result = $this->asaas
            ->customer()
            ->find();

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindCustomerByName()
    {
        $result = $this->asaas
            ->customer()
            ->findByName('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindCustomerByEmail()
    {
        $result = $this->asaas
            ->customer()
            ->findByEmail('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindCustomerByCpfCnpj()
    {
        $result = $this->asaas
            ->customer()
            ->findByCpfCnpj('1');

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

        $result = $this->asaas
            ->customer()
            ->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testDeleteCustomer()
    {
        $result = $this->asaas
            ->customer()
            ->remove('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testRestoreCustomer()
    {
        $result = $this->asaas
            ->customer()
            ->restore('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
