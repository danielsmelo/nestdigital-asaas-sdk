<?php

namespace Nestdigital\Asaas\Api;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Contracts\Config\Repository;

abstract class ApiAdapter
{
    private $config;
    private $client;
    protected $options;

    public function __construct(Repository $config, Client $client)
    {
        $this->config = $config;
        $this->client = $client;
        $this->options['headers'] = $this->getHeader();
    }

    public function getHeader()
    {
        return [
            'Content-Type' => 'application/json',
            'access_token' => $this->config->get('asaas.api_key'),
        ];
    }

    public function getFormDataHeader()
    {
        return $headers = [
            'Content-Type' => 'multipart/form-data',
            'access_token' => $this->config->get('asaas.api_key'),
        ];
    }

    public function getUrl(string $url)
    {
        $baseUrl = $this->config->get('asaas.base_url');

        if (substr($baseUrl, -1) != '/') {
            $baseUrl .= '/';
        }

        $apiVersion = $this->config->get('asaas.api_version');

        if (substr($apiVersion, -1) != '/') {
            $apiVersion .= '/';
        }

        return $baseUrl.$apiVersion.$url;
    }

    public function post(string $url, array $options)
    {
        $fullUrl = $this->getUrl($url);

        try {
            return $this->client->request('POST', $fullUrl, $options);
        } catch (Exception $e) {
            if ($e->getCode() == 400) {
                throw new Exception($this->getResponseErrorDescription($e));
            }

            throw new Exception($e->getMessage());
        }
    }

    public function put(string $url, array $options)
    {
        $fullUrl = $this->getUrl($url);

        try {
            return $this->client->request('PUT', $fullUrl, $options);
        } catch (Exception $e) {
            if ($e->getCode() == 400) {
                throw new Exception($this->getResponseErrorDescription($e));
            }

            throw new Exception($e->getMessage());
        }
    }

    public function get(string $url, array $options)
    {
        $fullUrl = $this->getUrl($url);

        try {
            return $this->client->request('GET', $fullUrl, $options);
        } catch (Exception $e) {
            if ($e->getCode() == 400) {
                throw new Exception($this->getResponseErrorDescription($e));
            }

            throw new Exception($e->getMessage());
        }
    }

    public function delete(string $url, array $options)
    {
        $fullUrl = $this->getUrl($url);

        try {
            return $this->client->request('DELETE', $fullUrl, $options);
        } catch (Exception $e) {
            if ($e->getCode() == 400) {
                throw new Exception($this->getResponseErrorDescription($e));
            }

            throw new Exception($e->getMessage());
        }
    }

    public function getResponseErrorDescription($e)
    {
        if ($e->getCode() == 400) {
            $response = json_decode($e->getResponse()->getBody()->getContents(), true);
        }

        if ($response) {
            return $response['errors'][0]['description'];
        }

        throw new Exception('Não existe resposta de erro do servidor');
    }
}
