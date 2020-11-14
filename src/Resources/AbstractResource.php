<?php

namespace Paramako\Pornhub\Resources;

use Paramako\Pornhub\Http\Client;

/**
 * Class AbstractResource
 * @package Paramako\Pornhub\Resources
 */
abstract class AbstractResource
{
    protected const PARAM_ORDERING_NEWEST = 'newest';
    protected const PARAM_ORDERING_MOSTVIEWED = 'mostviewed';
    protected const PARAM_ORDERING_RATING = 'rating';

    protected const PARAM_PERIOD_WEEKLY = 'weekly';
    protected const PARAM_PERIOD_MONTHLY = 'monthly';
    protected const PARAM_PERIOD_ALLTIME = 'alltime';

    protected const PARAM_THUMBSIZE_SMALL = 'small';
    protected const PARAM_THUMBSIZE_MEDIUM = 'medium';
    protected const PARAM_THUMBSIZE_LARGE = 'large';
    protected const PARAM_THUMBSIZE_SMALLHD = 'small_hd';
    protected const PARAM_THUMBSIZE_MEDIUMHD = 'medium_hd';
    protected const PARAM_THUMBSIZE_LARGEHD = 'large_hd';

    protected const PARAM_PAGE_DEFAULT = 1;
    protected const PARAM_STARS_DEFAULT = [];
    protected const PARAM_TAGS_DEFAULT = [];
    protected const PARAM_CATEGORY_DEFAULT = '';
    protected const PARAM_SEARCH_DEFAULT = '';

    protected const PARAM_ORDERING_DEFAULT = self::PARAM_ORDERING_MOSTVIEWED;
    protected const PARAM_PERIOD_DEFAULT = self::PARAM_PERIOD_WEEKLY;
    protected const PARAM_THUMBSIZE_DEFAULT = self::PARAM_THUMBSIZE_LARGEHD;

    /**
     * @var Client
     */
    protected Client $client;

    /**
     * AbstractResource constructor.
     * @param $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
