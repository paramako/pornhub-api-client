<?php

namespace Paramako\Pornhub;

use Paramako\Pornhub\Http\Client;
use Paramako\Pornhub\Resources\AbstractResource;
use Paramako\Pornhub\Resources\Videos;

/**
 * Class Factory
 *
 * @method Videos videos()
 *
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

    /**
     * Return an instance of a Resource based on the method called.
     * @param string $name
     * @param $args
     * @return AbstractResource
     */
    public function __call(string $name, $args): AbstractResource
    {
        $resource = 'Paramako\\Pornhub\\Resources\\'.ucfirst($name);

        return new $resource($this->client, ...$args);
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
