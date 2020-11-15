<?php

namespace Paramako\Pornhub\Http;

use \GuzzleHttp\Client as Guzzle;

/**
 * Class Client
 * @package Paramako\Pornhub\Http
 */
class Client implements RequestInterface
{
    /** @var string */
    protected const DEFAULT_URL = 'http://www.pornhub.com/webmasters/';

    /**
     * @var Guzzle|null
     */
    protected Guzzle $client;

    /**
     * Github api base url
     * @var string
     */
    protected string $baseUrl = self::DEFAULT_URL;

    /**
     * Throw exceptions on http error
     * @var bool
     */
    protected bool $httpErrors = true;

    /**
     * Enable ResponseInterface wrapper
     * @var bool
     */
    protected bool $wrapResponse = true;

    /**
     * Client constructor.
     * @param array $clientOptions
     * @param Guzzle|null $client
     */
    public function __construct(array $clientOptions = [], ?Guzzle $client = null)
    {
        $this->client = empty($client) ? new Guzzle($clientOptions) : $client;
    }

    /**
     * @param bool $httpErrors
     * @return Client
     */
    public function setHttpErrors(bool $httpErrors): Client
    {
        $this->httpErrors = $httpErrors;
        return $this;
    }

    /**
     * @param bool $wrapResponse
     * @return Client
     */
    public function setWrapResponse(bool $wrapResponse): Client
    {
        $this->wrapResponse = $wrapResponse;
        return $this;
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array $payload
     * @return Response|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(string $method, string $endpoint, array $payload = [])
    {
        $uri = $this->baseUrl . $endpoint;

        $options = ['http_errors' => $this->httpErrors];

        if ($payload) {
            $this->fillOptionsWithPayload($method, $payload, $options);
        }

        $response = $this->client->request($method, $uri, $options);

        return $this->wrapResponse ? new Response($response) : $response;
    }

    /**
     * @param string $method
     * @param array $payload
     * @param $options
     */
    protected function fillOptionsWithPayload(string $method, array $payload, &$options)
    {
        if ($method === 'GET') {
            $options['query'] = $payload;
        }

        if ($method === 'POST') {
            $options['json'] = $payload;
        }
    }
}
