<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AirQualityService;

class AirInfoController extends AbstractController
{
    /**
     *  helper for array
     *
     * @var object
     */
    private $airQualityApiService;

    public function __construct(AirQualityService $airQualityApiService)
    {
      $this->airQualityService = $airQualityApiService;
    }

    /**
     * @Route("/air/info/list", name="air_info_list")
     *
     * @param AirQualityService $airQualityApiService
     * @return Response;
     */
    public function getAllCities(): Response
    {
        $citiesList = $this->airQualityService->fetchAllCities();

        return $this->render('air_info/index.html.twig', [
            'citiesList' => $citiesList,
        ]);
    }

    /**
     * @Route("/air/info/show/{city}/stations", name="air_info_show_stations")
     *
     * @param AirQualityService $airQualityApiService
     * @param string $city
     * @return Response;
     */
    public function getOneCity($city): Response
    {
        $cityWitchStations = $this->airQualityService->fetchOneCity($city);

        return $this->render('air_info/show_stations.html.twig', [
            'cityWitchStations' => $cityWitchStations,
        ]);
    }
}
