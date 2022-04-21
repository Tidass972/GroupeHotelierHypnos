<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MontpellierController extends AbstractController
{
    #[Route('/montpellier', name: 'app_montpellier')]
    public function index(): Response
    {
        return $this->render('montpellier/index.html.twig', [
            'controller_name' => 'MontpellierController',
        ]);
    }
}
