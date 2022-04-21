<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BiarritzController extends AbstractController
{
    #[Route('/biarritz', name: 'app_biarritz')]
    public function index(): Response
    {
        return $this->render('biarritz/index.html.twig', [
            'controller_name' => 'BiarritzController',
        ]);
    }
}
