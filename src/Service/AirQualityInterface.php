<?php


namespace App\Service;


Interface AirQualityInterface
{
    /**
     * fetch all cities list
     *
     * @return array
     */
    public function fetchAllCities(): array;

    /**
     * fetch one city witch air stations
     *
     * @param string $city
     * @return array
     */
    public function fetchOneCity(string $city): array;
}
