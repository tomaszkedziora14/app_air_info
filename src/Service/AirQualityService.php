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
    private $arrayHelper;

    /**
     * api url
     *
     * @var array
     */
    private $url = ['http://api.gios.gov.pl/pjp-api/rest/station/findAll'];

    public function __construct(HttpClientInterface $client, ArrayHelper $arrayHelper)
    {
        $this->client = $client;
        $this->arrayHelper = $arrayHelper;
    }

    /**
     * fetch all cities with stations
     *
     * @return array
     */
    public function fetchAllCities(): array
    {
        $response = $this->client->request(
            self::METHOD_GET,
            $this->url[0]
        );

        $content = $response->toArray();
        $cities = [];

        foreach($content as $data){
          if((is_array($data['city']))){
            foreach($data['city'] as $cityName){
              if(is_string($cityName)){
               $cities[] = $cityName;
              }
            }
          }
        }

        $list = array_unique($cities);

        return $list;
    }

    /**
     * fetch one city witch air stations
     *
     * @param string $city
     * @return array
     */
    public function fetchOneCity(string $city): array
    {
      $response = $this->client->request(
          self::METHOD_GET,
          $this->url[0]
      );

      $content = $response->toArray();
      $city = $this->arrayHelper->searchThroughArray($city,$content);

      return $city;
    }
}
