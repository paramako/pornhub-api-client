<?php

namespace Paramako\Pornhub\Resources;

/**
 * Class Tags
 * @package Paramako\Pornhub\Resources
 */
class Tags extends AbstractResource
{
    /**
     * @param string $firstChar
     * @return \Paramako\Pornhub\Http\Response|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $firstChar = '0')
    {
        return $this->client->request('GET', 'tags', [
            'list' => $firstChar
        ]);
    }
}
