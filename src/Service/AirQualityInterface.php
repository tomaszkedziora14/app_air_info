<?php


namespace App\Service;


Interface AirQualityInterface
{
    /**
     * method GET
     *
     * @var string
     */
    const METHOD_GET = 'GET';
    
    /**
     * fetch all cities list
     *
     * @return array
     */
    public function fetchAllCities();

    /**
     * fetch one city witch air stations
     *
     * @param string $city
     * @return array
     */
    public function fetchOneCity();
}
