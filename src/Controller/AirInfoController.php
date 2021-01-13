<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AirQualityService;

class AirInfoController extends AbstractController
{
    /**
     * @Route("/air/info/list", name="air_info_list")
     *
     * @param AirQualityService $airQualityApiService
     * @return Response;
     */
    public function getAllCities(AirQualityService $airQualityApiService): Response
    {
        $citiesWitchStations = $airQualityApiService->fetchAllCities();

        return $this->render('air_info/index.html.twig', [
            'citiesWitchStations' => $citiesWitchStations,
        ]);
    }

    /**
     * @Route("/air/info/show/{city}/stations", name="air_info_show_stations")
     *
     * @param AirQualityService $airQualityApiService
     * @param string $city
     * @return Response;
     */
    public function getOneCity(AirQualityService $airQualityApiService, $city): Response
    {
        $cityStations = $airQualityApiService->fetchOneCity($city);

        return $this->render('air_info/show_stations.html.twig', [
            'cityStations' => $cityStations,
        ]);
    }
}
