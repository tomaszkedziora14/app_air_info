<?php


namespace App\Service;


Interface AirQualityInterface
{
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
