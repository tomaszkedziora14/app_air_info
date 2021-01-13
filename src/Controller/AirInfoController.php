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
    public function index(): Response
    {
        return $this->render('air_info/index.html.twig', []);
    }
}
