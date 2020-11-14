<?php

namespace Paramako\Pornhub;

use GuzzleHttp\Client;

/**
 * Class Factory
 * @package Paramako\Pornhub
 */
final class Factory
{
    private Client $client;

    /**
     * Factory constructor.
     * @param array $config
     * @param Client|null $client
     */
    public function __construct(array $config = [], ?Client $client = null)
    {
        $this->client = empty($client) ? new Client($config) : $client;
    }

    public function helloworld()
    {
        return 'hello';
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param array $config
     * @param Client|null $client
     * @return static
     */
    public static function create(array $config = [], ?Client $client = null): self
    {
        return new static($config, $client);
    }
}
