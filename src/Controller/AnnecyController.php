<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnecyController extends AbstractController
{
    #[Route('/annecy', name: 'app_annecy')]
    public function index(): Response
    {
        return $this->render('annecy/index.html.twig');
    }
}
