<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarseilleController extends AbstractController
{
    #[Route('/marseille', name: 'app_marseille')]
    public function index(): Response
    {
        return $this->render('marseille/index.html.twig', [
            'controller_name' => 'MarseilleController',
        ]);
    }
}
