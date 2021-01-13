<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AirInfoController extends AbstractController
{
    /**
     * @Route("air/info/list", name="air_info_list")
     */
    public function getAllCities(): Response
    {
        return $this->render('air_info/index.html.twig', []);
    }

    /**
     * @Route("/air/info/show/{city}/stations", name="air_info_show_stations")
     */
    public function getOneCity(): Response
    {
        return $this->render('show_stations/index.html.twig', []);
    }
}
