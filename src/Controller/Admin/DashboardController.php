<?php

namespace App\Controller\Admin;

use App\Entity\Gerant;
use App\Entity\Hotel;
use App\Entity\Hotel2;
use App\Entity\Suite;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]

    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

     public function configureDashboard(): Dashboard
        {
         return Dashboard::new()
             ->setTitle('Groupe Hôtelier Hypnos');
     }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisation', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Gerant', 'fas fa-user', Gerant::class);
        yield MenuItem::linkToCrud('Hotel', 'fas fa-hotel', Hotel::class);
        yield MenuItem::linkToCrud('Suite', 'fas fa-house', Suite::class);
    }
}
