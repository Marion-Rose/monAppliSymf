<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use App\Entity\Distributeur;
use App\Entity\Reference;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;


/**
 * Controller Dashboard
 */
class DashboardController extends AbstractDashboardController
{
    /**
     * @param AdminUrlGenerator $adminUrlGenerator
     */
    public function __construct(private AdminUrlGenerator $adminUrlGenerator) {
        $this->adminUrlGenerator = $adminUrlGenerator;
    }

    /**
     * @return Response
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ProduitCrudController::class)->generateUrl());

    }

    /**
     * @return Dashboard
     */
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('MonAppliSymf Copie');
    }

    /**
     * @return iterable
     */
    public function configureMenuItems(): iterable
    {
        
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

            MenuItem::section('Gestion de produits'),
            MenuItem::linkToCrud('Produits', 'fa fa-tags', Produit::class),
            MenuItem::linkToCrud('Distributeurs', 'fa fa-tags', Distributeur::class),
            MenuItem::linkToCrud('Reference', 'fa fa-tags', Reference::class),

        ];
    
    }
}
