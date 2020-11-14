<?php

namespace Paramako\Pornhub\Resources;

/**
 * Class Stars
 * @package Paramako\Pornhub\Resources
 */
class Stars extends AbstractResource
{
    /**
     * @return \Paramako\Pornhub\Http\Response|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get()
    {
        return $this->client->request('GET', 'stars');
    }

    /**
     * @return \Paramako\Pornhub\Http\Response|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDetailed()
    {
        return $this->client->request('GET', 'stars_detailed');
    }
}
