<?php

namespace Paramako\Pornhub\Http;

/**
 * Interface RequestInterface
 * @package Paramako\Pornhub\Http
 */
interface RequestInterface
{
    /**
     * @param string $method
     * @param string $endpoint
     * @param array $payload
     * @return mixed
     */
    public function request(string $method, string $endpoint, array $payload = []);
}
