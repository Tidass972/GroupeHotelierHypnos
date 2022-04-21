<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NiceController extends AbstractController
{
    #[Route('/nice', name: 'app_nice')]
    public function index(): Response
    {
        return $this->render('nice/index.html.twig', [
            'controller_name' => 'NiceController',
        ]);
    }
}
