<?php 
 
namespace App\Controller; 
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route; 
 
use Doctrine\ORM\EntityManagerInterface; 
use App\Entity\Produit;
use App\Entity\Distributeur;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller ListeProduits
 */
class ListeProduitsController extends AbstractController
{
    /**
     * @param EntityManagerInterface $entityManager
     * @return response
     */
    #[Route('/', name: 'liste')]
    public function liste(EntityManagerInterface $entityManager) 
    { 
 
        $produitsRepository=$entityManager->getRepository(Produit::class); 
        
        $listeProduits=$produitsRepository->findAll();
        $lastProduit=$produitsRepository->getLastProduit(); 
 
        return $this->render('liste_produits/index.html.twig', [ 
            'listeproduits' => $listeProduits,
            'lastproduit' => $lastProduit,
        ]); 
 
    }

    /**
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    #[Route("/distrib",name: "distributeurs")]
    public function listedistributeur(EntityManagerInterface $entityManager) 
    { 
        $repositoryDistributeurs=$entityManager->getRepository(Distributeur::class); 
        $distributeurs = $repositoryDistributeurs->findAll(); 
    
        return $this->render('liste_produits/distributeurs.html.twig', array('distributeurs' => $distributeurs)); 
    }

    /**
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    #[Route("/eager",name: "eager")]
    public function eager(EntityManagerInterface $entityManager) 
    { 
        $produitsRepository=$entityManager->getRepository(Produit::class); 
        $listeProduits=$produitsRepository->findAll(); 
            return $this->render('liste_produits/eager.html.twig', [ 
                'listeproduits' => $listeProduits, 
    
            ]); 
    }

    /**
     * @param EntityManagerInterface $entityManager
     * @return JsonResponse
     */
    #[Route("/apitest", name:"apitest")]
    public function apiTest(EntityManagerInterface $entityManager)
    {
        $produitsRepository=$entityManager->getRepository(Produit::class);
        $listeProduits=$produitsRepository->findAll();
        $resultat=[];
        foreach($listeProduits as $produit){
            array_push($resultat, $produit->getNom());
        }
        $reponse=new JsonResponse($resultat);
        return $reponse;
    }
} 