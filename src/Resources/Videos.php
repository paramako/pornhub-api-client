<?php

namespace Paramako\Pornhub\Resources;

/**
 * Class Videos
 * @package Paramako\Pornhub\Resources
 */
final class Videos extends AbstractResource
{
    /**
     * @param string $category
     * @param int $page
     * @param string $search
     * @param string $ordering
     * @param string $period
     * @param string $thumbSize
     * @param array $stars
     * @param array $tags
     * @return \Paramako\Pornhub\Http\Response|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function search(
        string $category = self::PARAM_CATEGORY_DEFAULT,
        int $page = self::PARAM_PAGE_DEFAULT,
        string $search = self::PARAM_SEARCH_DEFAULT,
        string $ordering = self::PARAM_ORDERING_DEFAULT,
        string $period = self::PARAM_PERIOD_DEFAULT,
        string $thumbSize = self::PARAM_THUMBSIZE_DEFAULT,
        array $stars = self::PARAM_STARS_DEFAULT,
        array $tags = self::PARAM_TAGS_DEFAULT
    ) {
        $payload = [
            'category' => urlencode($category),
            'page' => urlencode($page),
            'search' => urlencode($search),
            'ordering' => urlencode($ordering),
            'period' => urlencode($period),
            'thumbsize' => urlencode($thumbSize),
            'stars' => $stars,
            'tags' => $tags
        ];

        return $this->client->request('GET', 'search', $payload);
    }
}
