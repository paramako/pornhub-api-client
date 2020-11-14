<?php

namespace Paramako\Pornhub\Resources;

/**
 * Class Categories
 * @package Paramako\Pornhub\Resources
 */
class Categories extends AbstractResource
{
    /**
     * @return \Paramako\Pornhub\Http\Response|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get()
    {
        return $this->client->request('GET','categories');
    }
}
