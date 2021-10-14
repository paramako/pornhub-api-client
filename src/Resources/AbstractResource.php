<?php

namespace Paramako\Pornhub\Resources;

use Paramako\Pornhub\Http\Client;
use Paramako\Pornhub\Http\RequestInterface;

/**
 * Class AbstractResource
 * @package Paramako\Pornhub\Resources
 */
abstract class AbstractResource
{
    public const PARAM_ORDERING_NEWEST = 'newest';
    public const PARAM_ORDERING_MOSTVIEWED = 'mostviewed';
    public const PARAM_ORDERING_RATING = 'rating';

    public const PARAM_PERIOD_WEEKLY = 'weekly';
    public const PARAM_PERIOD_MONTHLY = 'monthly';
    public const PARAM_PERIOD_ALLTIME = 'alltime';

    public const PARAM_THUMBSIZE_SMALL = 'small';
    public const PARAM_THUMBSIZE_MEDIUM = 'medium';
    public const PARAM_THUMBSIZE_LARGE = 'large';
    public const PARAM_THUMBSIZE_SMALLHD = 'small_hd';
    public const PARAM_THUMBSIZE_MEDIUMHD = 'medium_hd';
    public const PARAM_THUMBSIZE_LARGEHD = 'large_hd';

    public const PARAM_PAGE_DEFAULT = 1;
    public const PARAM_STARS_DEFAULT = [];
    public const PARAM_TAGS_DEFAULT = [];
    public const PARAM_CATEGORY_DEFAULT = '';
    public const PARAM_SEARCH_DEFAULT = '';

    public const PARAM_ORDERING_DEFAULT = self::PARAM_ORDERING_MOSTVIEWED;
    public const PARAM_PERIOD_DEFAULT = self::PARAM_PERIOD_WEEKLY;
    public const PARAM_THUMBSIZE_DEFAULT = self::PARAM_THUMBSIZE_LARGEHD;

    /**
     * @var RequestInterface
     */
    protected RequestInterface $client;

    /**
     * AbstractResource constructor.
     * @param RequestInterface $client
     */
    public function __construct(RequestInterface $client)
    {
        $this->client = $client;
    }
}
