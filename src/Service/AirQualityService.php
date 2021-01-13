<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Helper\ArrayHelper;

class AirQualityService
{
    /**
     * method GET
     *
     * @var string
     */
    const METHOD_GET = 'GET';

    /**
     * api client
     *
     * @var object
     */
    private $client;

    /**
     *  helper for array
     *
     * @var object
     */
    private $helper;

    /**
     * api url
     *
     * @var array
     */
    private $url = 'http://api.gios.gov.pl/pjp-api/rest/station/findAll';

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
}
