<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LyonController extends AbstractController
{
    #[Route('/lyon', name: 'app_lyon')]
    public function index(): Response
    {
        return $this->render('lyon/index.html.twig', [
            'controller_name' => 'LyonController',
        ]);
    }
}
